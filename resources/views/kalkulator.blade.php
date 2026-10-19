<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Pink Calculator 💗</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Trebuchet MS', Arial, sans-serif;
        }

        body {
            min-height: 100vh;

            background: linear-gradient(
                135deg,
                #ffe4ec,
                #ffd6e7,
                #fce7f3
            );

            color: #795365;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            width: 100%;

            background: rgba(255,255,255,.95);

            border-bottom: 3px solid #ffc1d9;

            padding: 12px 7%;

            display: flex;
            justify-content: space-between;
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
        }

        .menu-toggle {
            display: none;

            border: none;

            background: transparent;

            color: #e94f88;

            font-size: 32px;

            font-weight: bold;

            cursor: pointer;
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
        }

        .nav-menu a:hover,
        .nav-menu a.active {
            background: #ffe5ef;

            color: #e94f88;
        }

        .logout-form {
            margin: 0;
        }

        .logout-btn {
            border: none;

            background: transparent;

            color: #a84d72;

            font-size: 13px;

            font-weight: bold;

            padding: 10px 15px;

            border-radius: 12px;

            cursor: pointer;
        }

        .logout-btn:hover {
            background: #ffe5ef;

            color: #e94f88;
        }

        /* =========================
           BACKGROUND
        ========================= */

        .page {
            min-height: calc(100vh - 72px);

            display: flex;

            justify-content: center;

            align-items: center;

            position: relative;

            overflow: hidden;

            padding: 30px 15px;
        }

        .heart {
            position: absolute;

            color: rgba(236, 72, 153, 0.18);

            font-size: 60px;
        }

        .heart.one {
            top: 8%;
            left: 10%;
        }

        .heart.two {
            bottom: 10%;
            right: 10%;

            font-size: 80px;
        }

        .heart.three {
            top: 18%;
            right: 15%;

            font-size: 35px;
        }

        /* =========================
           CALCULATOR
        ========================= */

        .calculator {
            position: relative;

            width: 390px;

            max-width: 90%;

            padding: 30px;

            background: rgba(255,255,255,.95);

            border-radius: 25px;

            border: 2px solid white;

            box-shadow:
                0 15px 40px
                rgba(190,24,93,.15);

            z-index: 2;
        }

        .header {
            text-align: center;

            margin-bottom: 25px;
        }

        .icon {
            width: 65px;
            height: 65px;

            margin: 0 auto 12px;

            display: flex;
            justify-content: center;
            align-items: center;

            border-radius: 50%;

            background: #fce7f3;

            font-size: 30px;

            box-shadow:
                0 5px 15px
                rgba(236,72,153,.15);
        }

        .header h1 {
            color: #be185d;

            font-size: 27px;

            margin-bottom: 7px;
        }

        .header p {
            color: #9d6b7d;

            font-size: 13px;
        }

        .form-group {
            margin-bottom: 17px;
        }

        label {
            display: block;

            color: #831843;

            font-size: 13px;

            font-weight: bold;

            margin-bottom: 7px;
        }

        input,
        select {
            width: 100%;

            padding: 13px 14px;

            border: 1.5px solid #f9a8d4;

            border-radius: 12px;

            background: #fffafa;

            color: #4a2633;

            font-size: 14px;

            outline: none;
        }

        input:focus,
        select:focus {
            border-color: #ec4899;

            background: #fff;

            box-shadow:
                0 0 0 3px
                rgba(236,72,153,.1);
        }

        select {
            cursor: pointer;
        }

        .button {
            width: 100%;

            padding: 14px;

            border: none;

            border-radius: 12px;

            background: #ec4899;

            color: white;

            font-size: 15px;

            font-weight: bold;

            cursor: pointer;
        }

        .button:hover {
            background: #db2777;

            transform: translateY(-2px);
        }

        .result {
            margin-top: 22px;

            padding: 18px;

            text-align: center;

            border-radius: 15px;

            background: #fff1f7;

            border: 1.5px solid #fbcfe8;
        }

        .result-title {
            color: #be185d;

            font-size: 11px;

            font-weight: bold;

            letter-spacing: 1px;

            margin-bottom: 8px;
        }

        .calculation {
            color: #6b4352;

            font-size: 18px;

            margin-bottom: 4px;
        }

        .answer {
            color: #db2777;

            font-size: 30px;

            font-weight: bold;
        }

        .footer {
            text-align: center;

            margin-top: 20px;
        }

        .back {
            color: #a1627b;

            text-decoration: none;

            font-size: 12px;
        }

        .back:hover {
            color: #db2777;
        }

        /* =========================
           RESPONSIVE NAVBAR
        ========================= */

        @media (max-width: 850px) {

            .menu-toggle {
                display: block;
            }

            .nav-menu {
                display: none;

                position: absolute;

                top: 70px;
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

            .nav-menu a,
            .logout-btn {
                width: 100%;
                text-align: left;
            }

            .logout-form {
                width: 100%;
            }
        }

        @media (max-width: 450px) {

            .navbar {
                padding: 10px 4%;
            }

            .brand {
                font-size: 17px;
            }

            .brand-icon {
                width: 38px;
                height: 38px;
                font-size: 19px;
            }

            .nav-menu {
                top: 60px;
                right: 4%;
                width: 92%;
            }

            .calculator {
                padding: 25px 20px;
            }

            .header h1 {
                font-size: 24px;
            }

            .icon {
                width: 58px;
                height: 58px;
                font-size: 27px;
            }
        }

    </style>

</head>

<body>

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

        <button
            class="menu-toggle"
            id="menuToggle"
            type="button"
        >
            ⋮
        </button>

        <div
            class="nav-menu"
            id="navMenu"
        >

            <a href="/home">
                🏠 Home
            </a>

            <a href="{{ route('berita') }}">
                📰 Berita
            </a>

            <a href="/produk">
                🛍️ Produk
            </a>

            <a href="/latihan">
                📝 Latihan
            </a>

            <a href="/kalkulator" class="active">
                🧮 Kalkulator
            </a>

            <form
                action="{{ route('logout') }}"
                method="POST"
                class="logout-form"
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
         PAGE
    ========================= -->

    <div class="page">

        <div class="heart one">♡</div>

        <div class="heart two">♡</div>

        <div class="heart three">♥</div>

        <div class="calculator">

            <div class="header">

                <div class="icon">
                    🧮
                </div>

                <h1>
                    Pink Calculator 💗
                </h1>

                <p>
                    Let's calculate something cute!
                </p>

            </div>

            <form
                action="/kalkulator/hitung"
                method="POST"
            >

                @csrf

                <div class="form-group">

                    <label for="angka1">
                        💕 Angka Pertama
                    </label>

                    <input
                        type="number"
                        name="angka1"
                        id="angka1"
                        placeholder="Masukkan angka pertama..."
                        required
                    >

                </div>

                <div class="form-group">

                    <label for="operator">
                        🌸 Operasi
                    </label>

                    <select
                        name="operator"
                        id="operator"
                        required
                    >

                        <option value="+">
                            ＋ Penjumlahan
                        </option>

                        <option value="-">
                            − Pengurangan
                        </option>

                        <option value="*">
                            × Perkalian
                        </option>

                        <option value="/">
                            ÷ Pembagian
                        </option>

                    </select>

                </div>

                <div class="form-group">

                    <label for="angka2">
                        💕 Angka Kedua
                    </label>

                    <input
                        type="number"
                        name="angka2"
                        id="angka2"
                        placeholder="Masukkan angka kedua..."
                        required
                    >

                </div>

                <button
                    type="submit"
                    class="button"
                >
                    Hitung Sekarang 💗
                </button>

            </form>

            @isset($hasil)

                <div class="result">

                    <div class="result-title">
                        ✨ HASIL PERHITUNGAN ✨
                    </div>

                    <div class="calculation">

                        {{ $angka1 }}
                        {{ $operator }}
                        {{ $angka2 }}

                    </div>

                    <div class="answer">

                        = {{ $hasil }}

                    </div>

                </div>

            @endisset

            <div class="footer">

                <a
                    href="/latihan"
                    class="back"
                >
                    ← Kembali ke halaman latihan
                </a>

            </div>

        </div>

    </div>

    <script>

        const menuToggle =
            document.getElementById('menuToggle');

        const navMenu =
            document.getElementById('navMenu');

        menuToggle.addEventListener('click', function () {

            navMenu.classList.toggle('show');

        });

        document
            .querySelectorAll('.nav-menu a')
            .forEach(function(link) {

                link.addEventListener('click', function() {

                    navMenu.classList.remove('show');

                });

            });

    </script>

</body>

</html>