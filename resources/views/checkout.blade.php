```blade
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout 💳</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Trebuchet MS", Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #ffd6e7, #ffeef5);
            color: #8d4a66;
        }

        .navbar {
            background: rgba(255,255,255,.95);
            border-bottom: 3px solid #ffc1d9;
            padding: 15px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #e94f88;
            font-size: 22px;
            font-weight: bold;
        }

        .brand-icon {
            width: 45px;
            height: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #ff8fbd, #ff5c9a);
            border-radius: 50%;
            font-size: 23px;
        }

        .nav-menu {
            display: flex;
            gap: 10px;
        }

        .nav-menu a {
            text-decoration: none;
            color: #a84d72;
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 12px;
        }

        .nav-menu a:hover {
            background: #ffe5ef;
            color: #e94f88;
        }

        .menu-toggle {
            display: none;
            border: none;
            background: #ffe5ef;
            color: #e94f88;
            width: 42px;
            height: 42px;
            border-radius: 12px;
            font-size: 23px;
            cursor: pointer;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: 40px auto;
        }

        h1 {
            color: #e94f88;
            margin-bottom: 25px;
        }

        .checkout-layout {
            display: grid;
            grid-template-columns: 1.3fr .7fr;
            gap: 25px;
        }

        .card {
            background: rgba(255,255,255,.95);
            border: 2px solid #ffd0df;
            border-radius: 22px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(244,114,154,.10);
        }

        .card h2 {
            color: #e94f88;
            margin-bottom: 20px;
        }

        label {
            display: block;
            color: #a84d72;
            font-weight: bold;
            margin-bottom: 7px;
            font-size: 13px;
        }

        input, textarea, select {
            width: 100%;
            border: 2px solid #ffd0df;
            border-radius: 12px;
            padding: 12px;
            margin-bottom: 17px;
            outline: none;
            color: #8d4a66;
            background: #fffafd;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        input:focus, textarea:focus, select:focus {
            border-color: #ff8fbd;
        }

        .item {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            padding: 12px 0;
            border-bottom: 1px solid #ffe1eb;
            font-size: 13px;
        }

        .total {
            margin-top: 18px;
            padding-top: 18px;
            border-top: 2px solid #ffc1d9;
            display: flex;
            justify-content: space-between;
            gap: 10px;
            color: #e94f88;
            font-size: 20px;
            font-weight: bold;
        }

        .pay-button {
            width: 100%;
            border: none;
            background: linear-gradient(135deg, #ff8fbd, #ff5c9a);
            color: white;
            padding: 14px;
            border-radius: 13px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 15px;
        }

        .pay-button:hover {
            opacity: .9;
        }

        .error {
            background: #ffe7ed;
            color: #c84f72;
            border-radius: 12px;
            padding: 12px;
            margin-bottom: 15px;
        }

        .qris-box {
            display: none;
            margin: 10px 0 20px;
            padding: 18px;
            border: 2px dashed #ff9fc4;
            border-radius: 18px;
            background: #fff5fa;
            text-align: center;
        }

        .qris-box.show {
            display: block;
        }

        .qris-box h3 {
            color: #e94f88;
            margin-bottom: 10px;
        }

        .qris-image {
            display: block;
            width: 220px;
            max-width: 100%;
            height: auto;
            margin: 15px auto;
            border: 5px solid white;
            border-radius: 12px;
        }

        .qris-note {
            font-size: 13px;
            line-height: 1.7;
            margin-top: 10px;
        }

        .info {
            background: #fff0f6;
            padding: 12px;
            border-radius: 12px;
            margin-bottom: 15px;
            font-size: 13px;
            line-height: 1.6;
        }

        @media(max-width: 800px) {
            .checkout-layout {
                grid-template-columns: 1fr;
            }

            .menu-toggle {
                display: block;
            }

            .nav-menu {
                display: none;
                position: absolute;
                top: 72px;
                right: 5%;
                width: 230px;
                background: white;
                border: 2px solid #ffc1d9;
                border-radius: 18px;
                padding: 12px;
                flex-direction: column;
            }

            .nav-menu.show {
                display: flex;
            }

            .container {
                margin: 25px auto;
            }

            .card {
                padding: 18px;
            }
        }
    </style>
</head>

<body>

<nav class="navbar">
    <div class="brand">
        <div class="brand-icon">🧸</div>
        My Cute News 💕
    </div>

    <button class="menu-toggle" id="menuToggle"
            type="button" aria-label="Buka menu"
            aria-expanded="false">☰</button>

    <div class="nav-menu" id="navMenu">
        <a href="{{ url('/home') }}">🏠 Home</a>
        <a href="{{ route('berita') }}">📰 Berita</a>
        <a href="{{ route('produk.index') }}">🛍️ Produk</a>
        <a href="{{ route('cart') }}">🛒 Keranjang</a>
    </div>
</nav>

<main class="container">
    <h1>💳 Checkout Pesanan</h1>

    @if(session('error'))
        <div class="error">{{ session('error') }}</div>
    @endif

    @if($errors->any())
        <div class="error">
            @foreach($errors->all() as $error)
                <div>❌ {{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('checkout.process') }}" method="POST">
        @csrf

        <div class="checkout-layout">

            <div class="card">
                <h2>👤 Data Pembeli</h2>

                <label for="name">Nama Lengkap</label>
                <input id="name" type="text" name="name"
                       value="{{ old('name', Auth::user()?->name) }}"
                       placeholder="Masukkan nama lengkap" required>

                <label for="phone">Nomor HP</label>
                <input id="phone" type="text" name="phone"
                       value="{{ old('phone') }}"
                       placeholder="08xxxxxxxxxx" required>

                <label for="address">Alamat Lengkap</label>
                <textarea id="address" name="address"
                          placeholder="Masukkan alamat lengkap..."
                          required>{{ old('address') }}</textarea>

                <label for="payment_method">Metode Pembayaran</label>
                <select id="payment_method" name="payment_method" required>
                    <option value="">-- Pilih Pembayaran --</option>

                    <option value="Transfer Bank"
                        {{ old('payment_method') == 'Transfer Bank' ? 'selected' : '' }}>
                        🏦 Transfer Bank
                    </option>

                    <option value="E-Wallet"
                        {{ old('payment_method') == 'E-Wallet' ? 'selected' : '' }}>
                        📱 E-Wallet
                    </option>

                    <option value="QRIS"
                        {{ old('payment_method') == 'QRIS' ? 'selected' : '' }}>
                        💳 QRIS
                    </option>

                    <option value="COD"
                        {{ old('payment_method') == 'COD' ? 'selected' : '' }}>
                        🚚 COD
                    </option>
                </select>

                <!-- QRIS muncul ketika metode QRIS dipilih -->
                <div class="qris-box {{ old('payment_method') == 'QRIS' ? 'show' : '' }}"
                     id="qrisBox">

                    <h3>💗 Pembayaran QRIS</h3>

                    <p>Silakan scan kode QRIS resmi penjual.</p>

                    <img
                        src="{{ asset('images/qris.png') }}"
                        alt="Kode QRIS pembayaran"
                        class="qris-image"
                        onerror="this.style.display='none'; document.getElementById('qrisMissing').style.display='block';">

                    <div id="qrisMissing" style="display:none; color:#c84f72;">
                        Gambar QRIS belum tersedia.<br>
                        Letakkan gambar QRIS resmi di:
                        <strong>public/images/qris.png</strong>
                    </div>

                    <div class="qris-note">
                        <strong>Total pembayaran:</strong><br>
                        <span id="qrisTotal">
                            Rp{{ number_format($total, 0, ',', '.') }}
                        </span>
                        <p>Setelah membayar, tekan tombol Buat Pesanan untuk menyimpan pesanan.</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <h2>🛍️ Ringkasan Pesanan</h2>

                @forelse($cart as $item)
                    <div class="item">
                        <div>
                            {{ $item['name'] }}
                            <br>
                            <small>
                                {{ $item['quantity'] }} ×
                                Rp{{ number_format($item['price'], 0, ',', '.') }}
                            </small>
                        </div>

                        <strong>
                            Rp{{ number_format(
                                $item['price'] * $item['quantity'],
                                0, ',', '.'
                            ) }}
                        </strong>
                    </div>
                @empty
                    <p>🛒 Keranjang masih kosong.</p>
                @endforelse

                <div class="total">
                    <span>Total</span>
                    <span>Rp{{ number_format($total, 0, ',', '.') }}</span>
                </div>

                <button type="submit" class="pay-button">
                    💕 Buat Pesanan
                </button>
            </div>

        </div>
    </form>
</main>

<script>
    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');
    const paymentMethod = document.getElementById('payment_method');
    const qrisBox = document.getElementById('qrisBox');

    menuToggle.addEventListener('click', function () {
        navMenu.classList.toggle('show');

        const isOpen = navMenu.classList.contains('show');
        menuToggle.innerHTML = isOpen ? '✕' : '☰';
        menuToggle.setAttribute('aria-expanded', isOpen);
    });

    paymentMethod.addEventListener('change', function () {
        qrisBox.classList.toggle('show', this.value === 'QRIS');
    });
</script>

</body>
</html>