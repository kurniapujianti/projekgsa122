<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    // TAMBAH KE KERANJANG
    public function addToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'emoji' => $product->emoji,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('cart')
            ->with('success', 'Produk berhasil ditambahkan ke keranjang! 🛒💕');
    }

    // KERANJANG
    public function cart()
    {
        $cart = session()->get('cart', []);
        $total = 0;

        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return view('cart', compact('cart', 'total'));
    }

    // TAMBAH JUMLAH
    public function increase($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }

        session()->put('cart', $cart);

        return redirect()->route('cart');
    }

    // KURANGI JUMLAH
    public function decrease($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            if ($cart[$id]['quantity'] > 1) {
                $cart[$id]['quantity']--;
            } else {
                unset($cart[$id]);
            }
        }

        session()->put('cart', $cart);

        return redirect()->route('cart');
    }

    // HAPUS DARI KERANJANG
    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
        }

        session()->put('cart', $cart);

        return redirect()->route('cart')
            ->with('success', 'Produk dihapus dari keranjang.');
    }

    // HALAMAN CHECKOUT
    public function checkout()
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('cart')
                ->with('error', 'Keranjang masih kosong.');
        }

        $total = 0;

        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return view('checkout', compact('cart', 'total'));
    }

    // PROSES CHECKOUT
    public function processCheckout(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'payment_method' => 'required|in:Transfer Bank,E-Wallet,QRIS,COD',
        ]);

        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('cart')
                ->with('error', 'Keranjang masih kosong.');
        }

        try {
            $order = DB::transaction(function () use ($request, $cart) {
                $total = 0;

                foreach ($cart as $item) {
                    $total += $item['price'] * $item['quantity'];
                }

                // Status awal. Pembayaran belum diverifikasi otomatis.
                $status = $request->payment_method === 'COD'
                    ? 'Pesanan Berhasil Dibuat'
                    : 'Menunggu Pembayaran';

                $order = Order::create([
                    'user_id' => Auth::id(),
                    'order_number' => 'ORD-' . date('YmdHis') . '-' . rand(100, 999),
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'address' => $request->address,
                    'payment_method' => $request->payment_method,
                    'total' => $total,
                    'status' => $status,
                ]);

                foreach ($cart as $item) {
                    OrderItem::create([
                        'order_id' => $order->id,
                        'product_id' => $item['id'],
                        'product_name' => $item['name'],
                        'price' => $item['price'],
                        'quantity' => $item['quantity'],
                        'subtotal' => $item['price'] * $item['quantity'],
                    ]);
                }

                return $order;
            });

            // Keranjang dikosongkan setelah pesanan tersimpan.
            session()->forget('cart');

            // Arahkan ke halaman konfirmasi pesanan.
            return redirect()->route('checkout.success', $order->id);

        } catch (\Throwable $e) {
            report($e);

            return back()
                ->withInput()
                ->with('error', 'Pesanan gagal dibuat. Periksa log Laravel untuk mengetahui penyebabnya.');
        }
    }

    // HALAMAN KONFIRMASI PESANAN
    public function success($id)
    {
        $orderModel = Order::with('items')->findOrFail($id);

        $order = [
            'id' => $orderModel->id,
            'order_number' => $orderModel->order_number,
            'name' => $orderModel->name,
            'phone' => $orderModel->phone,
            'address' => $orderModel->address,
            'payment_method' => $orderModel->payment_method,
            'status' => $orderModel->status,
            'date' => $orderModel->created_at
                ? $orderModel->created_at->format('d-m-Y H:i')
                : '-',
            'total' => $orderModel->total,
            'items' => $orderModel->items->map(function ($item) {
                return [
                    'name' => $item->product_name,
                    'quantity' => $item->quantity,
                    'price' => $item->price,
                    'subtotal' => $item->subtotal,
                ];
            })->toArray(),
        ];

        return view('checkout-success', compact('order'));
    }
}