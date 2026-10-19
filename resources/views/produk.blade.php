<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Produk 💕</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Trebuchet MS", Arial, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            min-height: 100vh;

            background:
                linear-gradient(
                    135deg,
                    #ffd6e7,
                    #ffeef5
                );

            color: #8d4a66;

            overflow-x: hidden;
        }


        /* =========================
           HEART
        ========================= */

        .heart {
            position: fixed;

            color: rgba(255, 105, 155, .35);

            font-size: 30px;

            animation:
                floating 5s ease-in-out infinite;

            pointer-events: none;

            z-index: 0;
        }

        .heart:nth-child(1) {
            top: 10%;
            left: 10%;
        }

        .heart:nth-child(2) {
            top: 20%;
            right: 12%;

            font-size: 45px;

            animation-delay: 1s;
        }

        .heart:nth-child(3) {
            bottom: 15%;
            left: 15%;

            font-size: 40px;

            animation-delay: 2s;
        }

        .heart:nth-child(4) {
            bottom: 10%;
            right: 15%;

            font-size: 35px;

            animation-delay: 3s;
        }

        @keyframes floating {

            0%, 100% {
                transform:
                    translateY(0)
                    rotate(-5deg);
            }

            50% {
                transform:
                    translateY(-25px)
                    rotate(10deg);
            }

        }


        /* =========================
           NAVBAR
        ========================= */

        .navbar {

            width: 100%;

            background:
                rgba(255,255,255,.95);

            backdrop-filter: blur(10px);

            border-bottom:
                3px solid #ffc1d9;

            padding: 15px 7%;

            display: flex;

            justify-content:
                space-between;

            align-items: center;

            position: sticky;

            top: 0;

            z-index: 1000;

            box-shadow:
                0 5px 20px
                rgba(244,114,154,.12);

        }


        .brand {

            display: flex;

            align-items: center;

            gap: 10px;

            color: #e94f88;

            font-size: 22px;

            font-weight: bold;

            white-space: nowrap;

        }


        .brand-icon {

            width: 45px;

            height: 45px;

            display: flex;

            justify-content: center;

            align-items: center;

            background:
                linear-gradient(
                    135deg,
                    #ff8fbd,
                    #ff5c9a
                );

            border-radius: 50%;

            font-size: 23px;

            flex-shrink: 0;

        }


        /* =========================
           TOMBOL TITIK 3
        ========================= */

        .menu-toggle {

            display: none;

            border: none;

            background: transparent;

            color: #e94f88;

            font-size: 34px;

            font-weight: bold;

            cursor: pointer;

            line-height: 1;

            padding: 5px 10px;

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

            transition: .3s;

            white-space: nowrap;

        }


        .nav-menu a:hover,

        .nav-menu a.active {

            background: #ffe5ef;

            color: #e94f88;

        }


        .logout-btn {

            border: none;

            cursor: pointer;

            background:
                linear-gradient(
                    135deg,
                    #ff8fbd,
                    #ff5c9a
                );

            color: white;

            padding: 10px 17px;

            border-radius: 12px;

            font-weight: bold;

            transition: .3s;

            white-space: nowrap;

        }


        .logout-btn:hover {

            transform:
                translateY(-2px);

            box-shadow:
                0 7px 15px
                rgba(255,92,154,.25);

        }


        /* =========================
           CONTAINER
        ========================= */

        .container {

            width: 1100px;

            max-width: 90%;

            margin: 40px auto;

            position: relative;

            z-index: 1;

        }


        /* =========================
           HEADER
        ========================= */

        .page-header {

            background:
                rgba(255,255,255,.94);

            border:
                3px solid #ffc1d9;

            border-radius: 25px;

            padding: 25px 30px;

            display: flex;

            justify-content:
                space-between;

            align-items: center;

            gap: 20px;

            margin-bottom: 25px;

            box-shadow:
                0 10px 30px
                rgba(244,114,154,.12);

        }


        .page-header h1 {

            color: #e94f88;

            font-size: 30px;

            margin-bottom: 6px;

        }


        .page-header p {

            color: #a8798c;

            font-size: 13px;

        }


        .add-button {

            text-decoration: none;

            color: white;

            background:
                linear-gradient(
                    135deg,
                    #ff8fbd,
                    #ff5c9a
                );

            padding: 13px 20px;

            border-radius: 14px;

            font-weight: bold;

            white-space: nowrap;

            box-shadow:
                0 7px 18px
                rgba(255,92,154,.20);

            transition: .3s;

        }


        .add-button:hover {

            transform:
                translateY(-2px);

            box-shadow:
                0 10px 25px
                rgba(255,92,154,.28);

        }


        /* =========================
           SUCCESS
        ========================= */

        .success {

            background: #eafff2;

            color: #3c9b68;

            border:
                2px solid #b8f0cf;

            padding: 14px 18px;

            border-radius: 14px;

            margin-bottom: 20px;

            font-weight: bold;

        }


        /* =========================
           SEARCH
        ========================= */

        .search-box {

            background:
                rgba(255,255,255,.94);

            border:
                2px solid #ffd0df;

            border-radius: 18px;

            padding: 15px;

            margin-bottom: 25px;

            box-shadow:
                0 8px 20px
                rgba(244,114,154,.08);

        }


        .search-box input {

            width: 100%;

            border: none;

            outline: none;

            padding: 8px;

            color: #8d4a66;

            background: transparent;

            font-size: 14px;

        }


        /* =========================
           PRODUCTS
        ========================= */

        .products {

            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 20px;

        }


        .product-card {

            background:
                rgba(255,255,255,.94);

            border:
                3px solid #ffd0df;

            border-radius: 23px;

            overflow: hidden;

            box-shadow:
                0 10px 30px
                rgba(244,114,154,.12);

            transition: .3s;

            min-width: 0;

        }


        .product-card:hover {

            transform:
                translateY(-6px);

            box-shadow:
                0 18px 35px
                rgba(244,114,154,.20);

        }


        /* =========================
           PRODUCT IMAGE
        ========================= */

        .product-image {

            height: 180px;

            background:
                linear-gradient(
                    135deg,
                    #fff0f6,
                    #ffe0eb
                );

            display: flex;

            justify-content: center;

            align-items: center;

            position: relative;

            overflow: hidden;

        }


        .product-img {

            width: 100%;

            height: 100%;

            object-fit: cover;

            display: block;

        }


        .product-emoji {

            font-size: 75px;

        }


        .discount {

            position: absolute;

            top: 12px;

            left: 12px;

            background: #ff5c9a;

            color: white;

            padding: 5px 9px;

            border-radius: 10px;

            font-size: 10px;

            font-weight: bold;

            z-index: 2;

        }


        /* =========================
           PRODUCT INFO
        ========================= */

        .product-info {

            padding: 18px;

        }


        .product-category {

            color: #d18da7;

            font-size: 10px;

            text-transform: uppercase;

            margin-bottom: 6px;

        }


        .product-name {

            color: #a84d72;

            font-size: 16px;

            margin-bottom: 8px;

            word-break: break-word;

        }


        .rating {

            color: #ffb347;

            font-size: 13px;

            margin-bottom: 10px;

        }


        .price {

            margin-bottom: 15px;

            display: flex;

            flex-wrap: wrap;

            align-items: center;

            gap: 4px;

        }


        .price-now {

            color: #e94f88;

            font-size: 17px;

            font-weight: bold;

        }


        .price-old {

            color: #c9a2b1;

            font-size: 11px;

            text-decoration: line-through;

            margin-left: 5px;

        }


        /* =========================
           BUTTON
        ========================= */

        .actions {

            display: flex;

            gap: 7px;

            flex-wrap: wrap;

        }


        .edit-button,

        .delete-button,

        .buy-button {

            flex: 1;

            padding: 10px;

            border: none;

            border-radius: 11px;

            cursor: pointer;

            font-weight: bold;

            text-align: center;

            text-decoration: none;

            font-size: 12px;

            min-width: 0;

        }


        .edit-button {

            background: #fff0f6;

            color: #e94f88;

        }


        .edit-button:hover {

            background: #ffe0eb;

        }


        .delete-button {

            background: #ffe6ec;

            color: #dc5579;

        }


        .delete-button:hover {

            background: #ffd5df;

        }


        /* =========================
           TAMBAHAN CHECKOUT
        ========================= */

        .buy-button {

            background:
                linear-gradient(
                    135deg,
                    #ff8fbd,
                    #ff5c9a
                );

            color: white;

        }


        .buy-button:hover {

            transform: translateY(-2px);

            box-shadow:
                0 6px 15px
                rgba(255,92,154,.25);

        }


        /* =========================
           CART NAVBAR
        ========================= */

        .cart-count {

            background: #ff5c9a;

            color: white;

            border-radius: 50%;

            min-width: 20px;

            height: 20px;

            display: inline-flex;

            justify-content: center;

            align-items: center;

            font-size: 10px;

            margin-left: 3px;

        }


        /* =========================
           EMPTY
        ========================= */

        .empty {

            grid-column: 1 / -1;

            text-align: center;

            background:
                rgba(255,255,255,.94);

            border:
                2px solid #ffd0df;

            border-radius: 20px;

            padding: 50px;

            color: #a8798c;

            font-size: 16px;

        }


        /* =========================
           FOOTER
        ========================= */

        footer {

            margin-top: 70px;

            padding: 30px;

            text-align: center;

            background:
                rgba(255,255,255,.75);

            border-top:
                2px solid #ffd5e3;

            color: #a8798c;

            font-size: 12px;

        }


        footer strong {

            color: #e94f88;

        }


        /* =========================
           TABLET
        ========================= */

        @media (max-width: 1000px) {

            .navbar {

                padding: 14px 4%;

            }

            .products {

                grid-template-columns:
                    repeat(3, 1fr);

            }

            .container {

                max-width: 94%;

            }

        }


        /* =========================
           NAVBAR RESPONSIVE
        ========================= */

        @media (max-width: 850px) {

            .menu-toggle {

                display: block;

                margin-left: auto;

            }


            .nav-menu {

                display: none;

                position: absolute;

                top: 72px;

                right: 5%;

                width: 230px;

                flex-direction: column;

                align-items: stretch;

                gap: 5px;

                background: white;

                padding: 15px;

                border-radius: 18px;

                box-shadow:
                    0 10px 30px
                    rgba(0,0,0,.15);

                z-index: 9999;

            }


            .nav-menu.show {

                display: flex;

            }


            .nav-menu a {

                width: 100%;

                display: block;

                text-align: left;

                padding: 12px 15px;

            }


            .nav-menu form {

                width: 100%;

            }


            .logout-btn {

                width: 100%;

                text-align: left;

                padding: 12px 15px;

            }


            .products {

                grid-template-columns:
                    repeat(2, minmax(0, 1fr));

            }


            .page-header {

                align-items:
                    flex-start;

            }

        }


        /* =========================
           HP
        ========================= */

        @media (max-width: 600px) {

            body {

                font-size: 14px;

            }


            .navbar {

                padding: 10px 4%;

            }


            .brand {

                font-size: 17px;

                gap: 7px;

            }


            .brand-icon {

                width: 38px;

                height: 38px;

                font-size: 19px;

            }


            .menu-toggle {

                font-size: 30px;

            }


            .nav-menu {

                top: 60px;

                right: 4%;

                width: 92%;

            }


            .container {

                max-width: 94%;

                margin: 20px auto;

            }


            .page-header {

                padding: 18px;

                border-radius: 20px;

                flex-direction: column;

                gap: 15px;

            }


            .page-header h1 {

                font-size: 23px;

            }


            .page-header p {

                font-size: 12px;

                line-height: 1.5;

            }


            .add-button {

                width: 100%;

                text-align: center;

                padding: 12px;

            }


            .search-box {

                padding: 12px;

                margin-bottom: 18px;

            }


            .search-box input {

                font-size: 14px;

                padding: 7px;

            }


            .products {

                grid-template-columns:
                    repeat(2, minmax(0, 1fr));

                gap: 10px;

            }


            .product-card {

                border-width: 2px;

                border-radius: 16px;

            }


            .product-image {

                height: 140px;

            }


            .product-emoji {

                font-size: 55px;

            }


            .product-info {

                padding: 12px;

            }


            .product-category {

                font-size: 9px;

            }


            .product-name {

                font-size: 14px;

                line-height: 1.3;

            }


            .rating {

                font-size: 11px;

            }


            .price-now {

                font-size: 14px;

            }


            .price-old {

                font-size: 9px;

                margin-left: 0;

            }


            .actions {

                flex-direction: column;

                gap: 5px;

            }


            .edit-button,

            .delete-button,

            .buy-button {

                width: 100%;

                padding: 9px 5px;

                font-size: 11px;

            }


            .discount {

                top: 7px;

                left: 7px;

                font-size: 8px;

                padding: 4px 7px;

            }


            footer {

                margin-top: 40px;

                padding: 20px 10px;

            }

        }


        /* =========================
           HP KECIL
        ========================= */

        @media (max-width: 380px) {

            .brand {

                font-size: 15px;

            }


            .brand-icon {

                width: 34px;

                height: 34px;

                font-size: 17px;

            }


            .products {

                grid-template-columns: 1fr;

                gap: 14px;

            }


            .product-image {

                height: 180px;

            }


            .product-info {

                padding: 15px;

            }


            .actions {

                flex-direction: row;

            }


            .page-header h1 {

                font-size: 21px;

            }

        }

    </style>

</head>


<body>


    <!-- =========================
         DEKORASI
    ========================= -->

    <div class="heart">♡</div>

    <div class="heart">♥</div>

    <div class="heart">♡</div>

    <div class="heart">♥</div>


    <!-- =========================
         NAVBAR
    ========================= -->

    <nav class="navbar">

        <div class="brand">

            <div class="brand-icon">
                🧸
            </div>

            My Cute News 💕

        </div>


        <!-- TOMBOL TITIK 3 -->

        <button
            class="menu-toggle"
            id="menuToggle"
            type="button"
            aria-label="Buka menu"
        >
            ⋮
        </button>


        <!-- MENU -->

        <div
            class="nav-menu"
            id="navMenu"
        >

            <!-- HOME -->

            <a href="/home">

                🏠 Home

            </a>


            <!-- BERITA -->

            <a href="{{ route('berita') }}">

                📰 Berita

            </a>


            <!-- PRODUK -->

            <a
                href="{{ route('produk.index') }}"
                class="active"
            >

                🛍️ Produk

            </a>


            <!-- TAMBAHAN CHECKOUT -->

            <a href="{{ route('cart') }}">

                🛒 Keranjang

                @if(session('cart'))

                    <span class="cart-count">

                        {{ array_sum(array_column(session('cart'), 'quantity')) }}

                    </span>

                @endif

            </a>


            <!-- LATIHAN -->

            <a href="/latihan">

                📝 Latihan

            </a>


            <!-- KALKULATOR -->

            <a href="/kalkulator">

                🧮 Kalkulator

            </a>


            <!-- LOGOUT -->

            <form
                action="{{ route('logout') }}"
                method="POST"
            >

                @csrf

                <button
                    type="submit"
                    class="logout-btn"
                >

                    🚪 Logout

                </button>

            </form>

        </div>

    </nav>


    <!-- =========================
         CONTENT
    ========================= -->

    <main class="container">


        <!-- HEADER -->

        <div class="page-header">

            <div>

                <h1>
                    Produk Kami 💕
                </h1>

                <p>
                    Kelola produk Sweet Shop kamu
                    dengan mudah ✨
                </p>

            </div>


            <!-- TAMBAH PRODUK -->

            <a
                href="{{ route('produk.create') }}"
                class="add-button"
            >

                ➕ Tambah Produk

            </a>

        </div>


        <!-- SUCCESS -->

        @if(session('success'))

            <div class="success">

                💕 {{ session('success') }}

            </div>

        @endif


        <!-- SEARCH -->

        <div class="search-box">

            <input
                type="text"
                id="searchInput"
                placeholder="🔍 Cari produk..."
            >

        </div>


        <!-- PRODUCTS -->

        <div
            class="products"
            id="productList"
        >

            @forelse($products as $product)


                <!-- PRODUCT CARD -->

                <div
                    class="product-card"
                    data-name="{{ strtolower($product->name) }}"
                >


                    <!-- IMAGE -->

                    <div class="product-image">


                        <!-- DISCOUNT -->

                        @if(
                            $product->old_price &&
                            $product->old_price > $product->price
                        )

                            <span class="discount">

                                PROMO

                            </span>

                        @endif


                        <!-- PRODUCT IMAGE -->

                        @if($product->image)

                            <img
                                src="{{ asset('storage/' . $product->image) }}"
                                alt="{{ $product->name }}"
                                class="product-img"
                            >

                        @else

                            <span class="product-emoji">

                                {{ $product->emoji }}

                            </span>

                        @endif

                    </div>


                    <!-- PRODUCT INFO -->

                    <div class="product-info">


                        <!-- CATEGORY -->

                        <div class="product-category">

                            {{ ucfirst($product->category) }}

                        </div>


                        <!-- NAME -->

                        <h3 class="product-name">

                            {{ $product->name }}

                        </h3>


                        <!-- RATING -->

                        <div class="rating">

                            {{ str_repeat('⭐', $product->rating) }}

                            {{ str_repeat('☆', 5 - $product->rating) }}

                        </div>


                        <!-- PRICE -->

                        <div class="price">

                            <span class="price-now">

                                Rp{{ number_format(
                                    $product->price,
                                    0,
                                    ',',
                                    '.'
                                ) }}

                            </span>


                            @if($product->old_price)

                                <span class="price-old">

                                    Rp{{ number_format(
                                        $product->old_price,
                                        0,
                                        ',',
                                        '.'
                                    ) }}

                                </span>

                            @endif

                        </div>


                        <!-- ACTIONS -->

                        <div class="actions">


                            <!-- TAMBAHAN CHECKOUT -->
                            <!-- BELI -->

                            <form
                                action="{{ route('cart.add', $product->id) }}"
                                method="POST"
                                style="flex:1;"
                            >

                                @csrf

                                <button
                                    type="submit"
                                    class="buy-button"
                                    style="width:100%;"
                                >

                                    🛒 Beli

                                </button>

                            </form>


                            <!-- EDIT -->

                            <a
                                href="{{ route(
                                    'produk.edit',
                                    $product->id
                                ) }}"
                                class="edit-button"
                            >

                                ✏️ Edit

                            </a>


                            <!-- DELETE -->

                            <form
                                action="{{ route(
                                    'produk.destroy',
                                    $product->id
                                ) }}"
                                method="POST"

                                style="flex:1;"

                                onsubmit="
                                    return confirm(
                                        'Yakin ingin menghapus produk ini? 💕'
                                    )
                                "
                            >

                                @csrf

                                @method('DELETE')


                                <button
                                    type="submit"
                                    class="delete-button"
                                    style="width:100%;"
                                >

                                    🗑️ Hapus

                                </button>

                            </form>

                        </div>

                    </div>

                </div>


            @empty


                <!-- EMPTY -->

                <div class="empty">

                    🥺

                    <br><br>

                    Belum ada produk.

                    <br><br>

                    Silakan tambahkan produk baru
                    dengan tombol
                    <strong>Tambah Produk</strong> 💕

                </div>


            @endforelse

        </div>

    </main>


    <!-- =========================
         FOOTER
    ========================= -->

    <footer>

        💕

        <strong>My Cute News</strong>
        — Sweet Shop 🐰✨

        <br><br>

        © {{ date('Y') }}

        All Rights Reserved 🌷

    </footer>


    <!-- =========================
         SEARCH + MENU SCRIPT
    ========================= -->

    <script>


        /* =========================
           SEARCH PRODUK
        ========================= */

        document
            .getElementById('searchInput')
            .addEventListener('input', function () {


                const keyword =
                    this.value.toLowerCase();


                const products =
                    document.querySelectorAll(
                        '.product-card'
                    );


                products.forEach(function(product) {


                    const name =
                        product.dataset.name;


                    if (name.includes(keyword)) {

                        product.style.display =
                            'block';

                    }

                    else {

                        product.style.display =
                            'none';

                    }

                });

            });


        /* =========================
           MENU TITIK 3
        ========================= */

        const menuToggle =
            document.getElementById('menuToggle');


        const navMenu =
            document.getElementById('navMenu');


        menuToggle.addEventListener(
            'click',
            function () {

                navMenu.classList.toggle('show');

            }
        );


        /* =========================
           TUTUP MENU SETELAH KLIK
        ========================= */

        document
            .querySelectorAll('.nav-menu a')
            .forEach(function(link) {

                link.addEventListener(
                    'click',
                    function() {

                        navMenu.classList.remove('show');

                    }
                );

            });


    </script>


</body>

</html>