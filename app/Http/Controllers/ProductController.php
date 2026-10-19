<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // =====================================================
    // MENAMPILKAN SEMUA PRODUK
    // =====================================================
    public function produk()
    {
        $products = Product::all();

        return view('produk', compact('products'));
    }


    // =====================================================
    // HALAMAN TAMBAH PRODUK
    // =====================================================
    public function create()
    {
        return view('create');
    }


    // =====================================================
    // MENYIMPAN PRODUK BARU
    // =====================================================
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'old_price' => 'nullable|numeric',
            'rating' => 'required|integer|min:1|max:5',
            'emoji' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // MENYIMPAN GAMBAR
        $image = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store(
                'products',
                'public'
            );
        }

        Product::create([
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'old_price' => $request->old_price,
            'rating' => $request->rating,
            'emoji' => $request->emoji,
            'image' => $image,
        ]);

        return redirect()
            ->route('produk.index')
            ->with(
                'success',
                'Produk berhasil ditambahkan 💕'
            );
    }


    // =====================================================
    // HALAMAN EDIT PRODUK
    // =====================================================
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('edit', compact('product'));
    }


    // =====================================================
    // UPDATE PRODUK
    // =====================================================
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'old_price' => 'nullable|numeric',
            'rating' => 'required|integer|min:1|max:5',
            'emoji' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = [
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'old_price' => $request->old_price,
            'rating' => $request->rating,
            'emoji' => $request->emoji,
        ];

        // JIKA ADA GAMBAR BARU
        if ($request->hasFile('image')) {

            // HAPUS GAMBAR LAMA
            if (
                $product->image &&
                Storage::disk('public')->exists($product->image)
            ) {
                Storage::disk('public')->delete($product->image);
            }

            // SIMPAN GAMBAR BARU
            $data['image'] = $request->file('image')->store(
                'products',
                'public'
            );
        }

        $product->update($data);

        return redirect()
            ->route('produk.index')
            ->with(
                'success',
                'Produk berhasil diperbarui 💕'
            );
    }


    // =====================================================
    // HAPUS PRODUK
    // =====================================================
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // HAPUS GAMBAR PRODUK
        if (
            $product->image &&
            Storage::disk('public')->exists($product->image)
        ) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()
            ->route('produk.index')
            ->with(
                'success',
                'Produk berhasil dihapus 🗑️'
            );
    }


    // =====================================================
    // TAMBAH PRODUK KE KERANJANG
    // =====================================================
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {

            // PRODUK SUDAH ADA
            $cart[$id]['quantity']++;

        } else {

            // PRODUK BARU
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

        return redirect()
            ->route('produk.index')
            ->with(
                'success',
                $product->name .
                ' berhasil masuk ke keranjang 🛒💕'
            );
    }


    // =====================================================
    // HALAMAN KERANJANG
    // =====================================================
    public function cart()
    {
        $cart = session()->get('cart', []);

        $total = 0;

        foreach ($cart as $item) {

            $total +=
                $item['price'] *
                $item['quantity'];
        }

        return view(
            'cart',
            compact('cart', 'total')
        );
    }


    // =====================================================
    // TAMBAH JUMLAH BARANG
    // =====================================================
    public function increaseCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);
        }

        return redirect()
            ->route('cart');
    }


    // =====================================================
    // KURANGI JUMLAH BARANG
    // =====================================================
    public function decreaseCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {

            if ($cart[$id]['quantity'] > 1) {

                $cart[$id]['quantity']--;

            } else {

                unset($cart[$id]);
            }

            session()->put('cart', $cart);
        }

        return redirect()
            ->route('cart');
    }


    // =====================================================
    // HAPUS PRODUK DARI KERANJANG
    // =====================================================
    public function removeCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {

            unset($cart[$id]);

            session()->put('cart', $cart);
        }

        return redirect()
            ->route('cart')
            ->with(
                'success',
                'Produk berhasil dihapus dari keranjang 🗑️'
            );
    }


    // =====================================================
    // HALAMAN CHECKOUT
    // =====================================================
    public function checkout()
    {
        $cart = session()->get('cart', []);

        // CEK KERANJANG
        if (empty($cart)) {

            return redirect()
                ->route('cart')
                ->with(
                    'success',
                    'Keranjang kamu masih kosong 🥺'
                );
        }

        // HITUNG TOTAL
        $total = 0;

        foreach ($cart as $item) {

            $total +=
                $item['price'] *
                $item['quantity'];
        }

        return view(
            'checkout',
            compact('cart', 'total')
        );
    }


    // =====================================================
    // PROSES CHECKOUT
    // =====================================================
    public function processCheckout(Request $request)
    {
        // =================================================
        // VALIDASI DATA PEMBELI
        // =================================================
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'payment_method' => 'required|string',
        ]);


        // =================================================
        // AMBIL KERANJANG
        // =================================================
        $cart = session()->get('cart', []);


        // =================================================
        // CEK KERANJANG
        // =================================================
        if (empty($cart)) {

            return redirect()
                ->route('cart')
                ->with(
                    'success',
                    'Keranjang kamu masih kosong 🥺'
                );
        }


        // =================================================
        // HITUNG TOTAL
        // =================================================
        $total = 0;

        foreach ($cart as $item) {

            $total +=
                $item['price'] *
                $item['quantity'];
        }


        // =================================================
        // BUAT NOMOR PESANAN
        // =================================================
        $orderNumber =
            'ORD-' .
            date('YmdHis') .
            '-' .
            rand(100, 999);


        // =================================================
        // BUAT DATA PESANAN
        // =================================================
        $order = [

            // NOMOR PESANAN
            'order_number' => $orderNumber,

            // DATA PEMBELI
            'name' => $request->name,

            'phone' => $request->phone,

            'address' => $request->address,

            // METODE PEMBAYARAN
            'payment_method' => $request->payment_method,

            // STATUS PESANAN
            'status' => 'Menunggu Pembayaran',

            // TOTAL
            'total' => $total,

            // PRODUK
            'items' => $cart,

            // TANGGAL
            'date' => now()->format('d-m-Y H:i:s'),
        ];


        // =================================================
        // SIMPAN PESANAN KE SESSION
        // =================================================
        session()->put(
            'last_order',
            $order
        );


        // =================================================
        // KOSONGKAN KERANJANG
        // =================================================
        session()->forget('cart');


        // =================================================
        // TAMPILKAN HALAMAN BERHASIL
        // =================================================
        return view(
            'checkout-success',
            compact('order')
        );
    }
}