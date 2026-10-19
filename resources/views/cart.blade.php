<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Keranjang 💕</title>

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
            width: 100%;
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
            background: linear-gradient(135deg,#ff8fbd,#ff5c9a);
            border-radius: 50%;
            font-size: 23px;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-menu a {
            text-decoration: none;
            color: #a84d72;
            font-size: 13px;
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 12px;
        }

        .nav-menu a:hover,
        .nav-menu a.active {
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

        .title {
            color: #e94f88;
            margin-bottom: 20px;
        }

        .success,
        .error {
            padding: 14px;
            border-radius: 14px;
            margin-bottom: 20px;
        }

        .success {
            background: #eafff2;
            color: #3c9b68;
        }

        .error {
            background: #ffe7ed;
            color: #c84f72;
        }

        .cart-card {
            background: rgba(255,255,255,.95);
            border: 2px solid #ffd0df;
            border-radius: 20px;
            padding: 20px;
            margin-bottom: 15px;
        }

        .cart-item {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .cart-image {
            width: 90px;
            height: 90px;
            border-radius: 15px;
            object-fit: cover;
            background: #fff0f6;
        }

        .cart-info {
            flex: 1;
        }

        .cart-info h3 {
            color: #a84d72;
            margin-bottom: 7px;
        }

        .price {
            color: #e94f88;
            font-weight: bold;
        }

        .quantity {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .quantity a {
            text-decoration: none;
            background: #ffe5ef;
            color: #e94f88;
            padding: 7px 11px;
            border-radius: 9px;
            font-weight: bold;
        }

        .remove {
            text-decoration: none;
            color: #dc5579;
            font-size: 12px;
        }

        .total-card {
            background: white;
            border: 3px solid #ffc1d9;
            border-radius: 20px;
            padding: 22px;
            text-align: right;
        }

        .total {
            color: #e94f88;
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .checkout-button {
            display: inline-block;
            text-decoration: none;
            background: linear-gradient(135deg,#ff8fbd,#ff5c9a);
            color: white;
            padding: 13px 22px;
            border-radius: 13px;
            font-weight: bold;
        }

        .empty {
            background: white;
            border: 2px solid #ffd0df;
            border-radius: 20px;
            padding: 50px;
            text-align: center;
        }

        @media (max-width: 850px) {

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
                padding: 12px;
                border: 2px solid #ffc1d9;
                border-radius: 18px;
                flex-direction: column;
                align-items: stretch;
            }

            .nav-menu.show {
                display: flex;
            }

            .nav-menu a {
                width: 100%;
            }
        }

        @media (max-width: 600px) {

            .brand {
                font-size: 17px;
            }

            .brand-icon {
                width: 38px;
                height: 38px;
                font-size: 19px;
            }

            .nav-menu {
                right: 4%;
                width: 92%;
            }

            .cart-item {
                flex-wrap: wrap;
            }

            .quantity {
                width: 100%;
            }

            .total-card {
                text-align: center;
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

    <button
        class="menu-toggle"
        id="menuToggle"
        type="button"
    >
        ☰
    </button>

    <div class="nav-menu" id="navMenu">

        <a href="/home">🏠 Home</a>

        <a href="{{ route('berita') }}">📰 Berita</a>

        <a href="{{ route('produk.index') }}">🛍️ Produk</a>

        <a href="{{ route('cart') }}" class="active">
            🛒 Keranjang
        </a>

        <a href="/latihan">📝 Latihan</a>

        <a href="/kalkulator">🧮 Kalkulator</a>

    </div>

</nav>


<main class="container">

    <h1 class="title">
        🛒 Keranjang Belanja 💕
    </h1>


    @if(session('success'))

        <div class="success">
            💕 {{ session('success') }}
        </div>

    @endif


    @if(session('error'))

        <div class="error">
            ❌ {{ session('error') }}
        </div>

    @endif


    @if(count($cart) > 0)

        @foreach($cart as $item)

            <div class="cart-card">

                <div class="cart-item">

                    @if($item['image'])

                        <img
                            src="{{ asset('storage/'.$item['image']) }}"
                            class="cart-image"
                            alt="{{ $item['name'] }}"
                        >

                    @else

                        <div class="cart-image"
                             style="display:flex;align-items:center;justify-content:center;font-size:40px;">
                            {{ $item['emoji'] }}
                        </div>

                    @endif


                    <div class="cart-info">

                        <h3>
                            {{ $item['name'] }}
                        </h3>

                        <div class="price">
                            Rp{{ number_format($item['price'],0,',','.') }}
                        </div>

                    </div>


                    <div class="quantity">

                        <a href="{{ route('cart.decrease',$item['id']) }}">
                            −
                        </a>

                        <strong>
                            {{ $item['quantity'] }}
                        </strong>

                        <a href="{{ route('cart.increase',$item['id']) }}">
                            +
                        </a>

                    </div>


                    <div>

                        <a
                            href="{{ route('cart.remove',$item['id']) }}"
                            class="remove"
                        >
                            🗑️ Hapus
                        </a>

                    </div>

                </div>

            </div>

        @endforeach


        <div class="total-card">

            <div class="total">

                Total:
                Rp{{ number_format($total,0,',','.') }}

            </div>

            <a
                href="{{ route('checkout') }}"
                class="checkout-button"
            >
                💳 Checkout Sekarang
            </a>

        </div>

    @else

        <div class="empty">

            🛒

            <h2>
                Keranjang masih kosong
            </h2>

            <br>

            <a
                href="{{ route('produk.index') }}"
                class="checkout-button"
            >
                🛍️ Lihat Produk
            </a>

        </div>

    @endif

</main>


<script>

const menuToggle =
    document.getElementById('menuToggle');

const navMenu =
    document.getElementById('navMenu');

menuToggle.addEventListener('click', function () {

    navMenu.classList.toggle('show');

    if (navMenu.classList.contains('show')) {
        menuToggle.innerHTML = '✕';
    } else {
        menuToggle.innerHTML = '☰';
    }

});

</script>

</body>
</html>