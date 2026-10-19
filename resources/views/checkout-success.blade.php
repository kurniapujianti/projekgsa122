<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Berhasil 💕</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Trebuchet MS", Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            padding: 25px 0;
            background: linear-gradient(135deg, #ffd6e7, #ffeef5);
            color: #8d4a66;
        }

        .container {
            width: 92%;
            max-width: 750px;
            margin: 20px auto;
        }

        .card {
            background: white;
            border: 2px solid #ffd0df;
            border-radius: 22px;
            padding: 28px;
            margin-bottom: 20px;
            box-shadow: 0 10px 30px rgba(244, 114, 154, .12);
        }

        .success-header {
            text-align: center;
        }

        .success-icon {
            width: 85px;
            height: 85px;
            margin: 0 auto 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #ffe5ef;
            border-radius: 50%;
            font-size: 45px;
        }

        h1, h2 {
            color: #e94f88;
            margin-bottom: 15px;
        }

        p {
            line-height: 1.7;
        }

        .status {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 16px;
            background: #fff0f6;
            border: 1px solid #ffc1d9;
            border-radius: 20px;
            color: #c84f72;
            font-weight: bold;
        }

        .row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 15px;
            padding: 12px 0;
            border-bottom: 1px solid #ffe1eb;
            overflow-wrap: anywhere;
        }

        .row:last-child {
            border-bottom: none;
        }

        .row strong {
            text-align: right;
        }

        .item {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            padding: 14px 0;
            border-bottom: 1px solid #ffe1eb;
        }

        .item:last-child {
            border-bottom: none;
        }

        .total {
            display: flex;
            justify-content: space-between;
            gap: 12px;
            margin-top: 15px;
            padding-top: 18px;
            border-top: 2px solid #ffc1d9;
            color: #e94f88;
            font-size: 20px;
            font-weight: bold;
        }

        .notice {
            margin-top: 18px;
            padding: 14px;
            border-radius: 12px;
            background: #fff0f6;
            font-size: 14px;
            line-height: 1.7;
        }

        .buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 20px;
        }

        .btn {
            flex: 1;
            min-width: 180px;
            display: inline-block;
            text-align: center;
            text-decoration: none;
            border: none;
            border-radius: 13px;
            padding: 14px;
            background: linear-gradient(135deg, #ff8fbd, #ff5c9a);
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-secondary {
            background: white;
            border: 2px solid #ffc1d9;
            color: #e94f88;
        }

        @media(max-width: 500px) {
            .card {
                padding: 20px 16px;
            }

            .row, .item {
                font-size: 13px;
            }

            .total {
                font-size: 17px;
            }
        }
    </style>
</head>

<body>
<main class="container">

    <section class="card success-header">
        <div class="success-icon">🎉</div>

        <h1>Pesanan Berhasil Dibuat!</h1>

        <p>
            Terima kasih, <strong>{{ $order['name'] }}</strong> 💕
        </p>

        <p>
            Pesanan kamu sudah tersimpan. Simpan nomor pesanan berikut
            untuk memeriksa pesananmu.
        </p>

        <div class="status">
            📌 Status: {{ $order['status'] }}
        </div>
    </section>

    <section class="card">
        <h2>🧾 Informasi Pesanan</h2>

        <div class="row">
            <span>Nomor Pesanan</span>
            <strong>{{ $order['order_number'] }}</strong>
        </div>

        <div class="row">
            <span>Tanggal Pesanan</span>
            <strong>{{ $order['date'] }}</strong>
        </div>

        <div class="row">
            <span>Nama Pembeli</span>
            <strong>{{ $order['name'] }}</strong>
        </div>

        <div class="row">
            <span>Nomor HP</span>
            <strong>{{ $order['phone'] }}</strong>
        </div>

        <div class="row">
            <span>Alamat Pengiriman</span>
            <strong>{{ $order['address'] }}</strong>
        </div>

        <div class="row">
            <span>Metode Pembayaran</span>
            <strong>{{ $order['payment_method'] }}</strong>
        </div>
    </section>

    <section class="card">
        <h2>🛍️ Rincian Pesanan</h2>

        @forelse($order['items'] as $item)
            <div class="item">
                <div>
                    <strong>{{ $item['name'] }}</strong>
                    <p>
                        {{ $item['quantity'] }} ×
                        Rp{{ number_format($item['price'], 0, ',', '.') }}
                    </p>
                </div>

                <strong>
                    Rp{{ number_format($item['subtotal'], 0, ',', '.') }}
                </strong>
            </div>
        @empty
            <p>Tidak ada rincian barang pada pesanan ini.</p>
        @endforelse

        <div class="total">
            <span>Total Pesanan</span>
            <span>
                Rp{{ number_format($order['total'], 0, ',', '.') }}
            </span>
        </div>

        @if($order['payment_method'] === 'QRIS')
            <div class="notice">
                💳 <strong>Pembayaran QRIS</strong><br>
                Pesanan sudah tercatat, tetapi status pembayaran masih
                menunggu verifikasi. Simpan nomor pesanan kamu.
                Halaman ini belum memverifikasi pembayaran secara otomatis.
            </div>
        @elseif($order['payment_method'] === 'COD')
            <div class="notice">
                🚚 <strong>Pembayaran COD</strong><br>
                Pesanan berhasil dibuat. Siapkan pembayaran ketika pesanan
                diterima.
            </div>
        @else
            <div class="notice">
                💗 <strong>Informasi Pembayaran</strong><br>
                Pesanan sudah tercatat. Silakan selesaikan pembayaran
                sesuai metode yang dipilih.
            </div>
        @endif

        <div class="buttons">
            <a href="{{ route('produk.index') }}" class="btn">
                🛍️ Belanja Lagi
            </a>

            <a href="{{ route('cart') }}" class="btn btn-secondary">
                🛒 Kembali ke Keranjang
            </a>
        </div>
    </section>

</main>
</body>
</html>