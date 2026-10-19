<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login 💕</title>

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
            position: relative;
            overflow-x: hidden;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            width: 100%;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(10px);
            border-bottom: 3px solid #ffc1d9;
            padding: 15px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;

            position: relative;

            top: 0;
            left: 0;
            z-index: 100;

            box-shadow: 0 5px 20px rgba(244, 114, 154, 0.12);
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
            box-shadow: 0 5px 15px rgba(255, 92, 154, .25);
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

        .login-btn {
            background: linear-gradient(135deg, #ff8fbd, #ff5c9a);
            color: white !important;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 15px rgba(255, 92, 154, .25);
        }


        /* =========================
           DEKORASI BACKGROUND
        ========================= */

        .heart {
            position: fixed;
            color: rgba(255, 105, 155, 0.35);
            font-size: 30px;
            animation: floating 5s ease-in-out infinite;
            z-index: 0;
        }

        .heart:nth-child(1) {
            top: 15%;
            left: 10%;
            animation-delay: 0s;
        }

        .heart:nth-child(2) {
            top: 25%;
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

        .heart:nth-child(5) {
            top: 50%;
            left: 5%;
            font-size: 25px;
            animation-delay: 1.5s;
        }

        @keyframes floating {
            0%, 100% {
                transform: translateY(0) rotate(-5deg);
            }

            50% {
                transform: translateY(-25px) rotate(10deg);
            }
        }


        /* =========================
           BAGIAN LOGIN
        ========================= */

        .login-section {
            min-height: calc(100vh - 78px);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 90px 20px 50px;
            position: relative;
            z-index: 1;
        }


        /* =========================
           LOGIN CARD
        ========================= */

        .login-card {
            width: 400px;
            max-width: 92%;
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 30px;
            border: 4px solid #ffc1d9;
            box-shadow: 0 20px 50px rgba(244, 114, 154, 0.25);
            position: relative;
            animation: appear 0.8s ease;
        }

        @keyframes appear {
            from {
                opacity: 0;
                transform: scale(0.85) translateY(30px);
            }

            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }


        /* =========================
           LOGO
        ========================= */

        .logo {
            width: 80px;
            height: 80px;

            /* DIUBAH AGAR TIDAK TERLALU KELUAR */
            margin: -35px auto 20px;

            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #ff8fbd, #ff5c9a);
            border-radius: 50%;
            font-size: 38px;
            border: 6px solid white;
            box-shadow: 0 8px 20px rgba(255, 92, 154, 0.3);
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-7px);
            }
        }


        /* =========================
           JUDUL
        ========================= */

        h1 {
            text-align: center;
            color: #e94f88;
            font-size: 30px;
            margin-bottom: 5px;
        }

        .subtitle {
            text-align: center;
            color: #a8798c;
            font-size: 14px;
            margin-bottom: 20px;
        }


        /* =========================
           ERROR
        ========================= */

        .error-alert {
            background: #ffe6f0;
            border: 2px dashed #ff9bc4;
            padding: 10px 14px;
            border-radius: 12px;
            margin-bottom: 18px;
        }

        .error-alert p {
            color: #d63384;
            font-size: 12px;
            margin-bottom: 3px;
        }


        /* =========================
           INPUT
        ========================= */

        .input-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            color: #a84d72;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 7px;
        }

        .input-wrapper {
            position: relative;
        }

        input {
            width: 100%;
            padding: 14px 45px 14px 16px;
            border: 2px solid #ffd0df;
            border-radius: 15px;
            background: #fff7fa;
            outline: none;
            color: #8d4a66;
            font-size: 14px;
            transition: 0.3s;
        }

        input::placeholder {
            color: #d5a5b7;
        }

        input:focus {
            border-color: #ff7eae;
            background: white;
            box-shadow: 0 0 0 4px rgba(255, 126, 174, 0.12);
        }

        .icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 18px;
        }


        /* =========================
           OPTIONS
        ========================= */

        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 12px;
            margin: 5px 0 22px;
        }

        .remember {
            display: flex;
            gap: 6px;
            align-items: center;
            color: #a8798c;
            cursor: pointer;
        }

        .remember input {
            width: auto;
            accent-color: #ff6fa5;
        }

        .forgot {
            color: #e95089;
            text-decoration: none;
            font-weight: bold;
        }


        /* =========================
           BUTTON
        ========================= */

        .btn {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 15px;
            background: linear-gradient(135deg, #ff8fbd, #ff5c9a);
            color: white;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 8px 20px rgba(255, 92, 154, 0.25);
            transition: 0.3s;
        }

        .btn:hover {
            transform: translateY(-3px) scale(1.01);
            box-shadow: 0 12px 25px rgba(255, 92, 154, 0.35);
        }

        .btn:active {
            transform: scale(0.97);
        }


        /* =========================
           DIVIDER
        ========================= */

        .divider {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 23px 0;
            color: #c895a9;
            font-size: 11px;
        }

        .divider::before,
        .divider::after {
            content: "";
            height: 2px;
            flex: 1;
            background: #ffd5e3;
        }


        /* =========================
           SOCIAL
        ========================= */

        .social {
            display: flex;
            gap: 10px;
        }

        .social button {
            flex: 1;
            padding: 11px;
            border: 2px solid #ffd5e3;
            border-radius: 13px;
            background: #fff8fb;
            color: #a84d72;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        .social button:hover {
            background: #ffe5ef;
            transform: translateY(-2px);
        }


        /* =========================
           REGISTER
        ========================= */

        .register {
            text-align: center;
            margin-top: 22px;
            color: #a8798c;
            font-size: 13px;
        }

        .register a {
            color: #e94f88;
            font-weight: bold;
            text-decoration: none;
        }

        .register a:hover {
            color: #ff5c9a;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 650px) {

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
                gap: 3px;
            }

            .nav-menu a {
                padding: 8px 9px;
                font-size: 11px;
            }

            .login-section {
                padding-top: 70px;
            }
        }


        @media (max-width: 450px) {

            .login-card {
                padding: 35px 22px;
            }

            .brand {
                font-size: 15px;
            }

            .nav-menu a {
                padding: 7px 6px;
                font-size: 10px;
            }

            .login-section {
                padding: 60px 15px 30px;
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


        <div class="nav-menu">

            <a href="/home">
                🏠 Home
            </a>

            <a href="{{ route('berita') }}">
                📰 Berita
            </a>

            <a href="/login" class="active login-btn">
                🔐 Login
            </a>

        </div>

    </nav>


    <!-- =========================
         BACKGROUND DECORATIONS
    ========================= -->

    <div class="heart">♡</div>

    <div class="heart">♥</div>

    <div class="heart">♡</div>

    <div class="heart">♥</div>

    <div class="heart">✦</div>


    <!-- =========================
         BAGIAN LOGIN
    ========================= -->

    <section class="login-section">

        <div class="login-card">

            <div class="logo">
                🐰
            </div>


            <h1>
                Hai, Welcome! 💕
            </h1>


            <p class="subtitle">
                Senang melihatmu kembali ✨
            </p>


            <!-- =========================
                 BLOK VALIDASI ERROR
            ========================= -->

            @if ($errors->any())

                <div class="error-alert">

                    @foreach ($errors->all() as $error)

                        <p>
                            ⚠️ {{ $error }}
                        </p>

                    @endforeach

                </div>

            @endif


            <!-- =========================
                 PESAN BERHASIL
            ========================= -->

            @if (session('success'))

                <div
                    class="error-alert"
                    style="background: #e6ffed; border-color: #82c91e;"
                >

                    <p style="color: #2b8a3e;">

                        ✨ {{ session('success') }}

                    </p>

                </div>

            @endif


            <!-- =========================
                 FORM LOGIN
            ========================= -->

            <form action="/login" method="POST">

                @csrf


                <!-- USERNAME -->

                <div class="input-group">

                    <label>
                        Nama / Username 👤
                    </label>

                    <div class="input-wrapper">

                        <input
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Masukkan nama kamu"
                            required
                        >

                        <span class="icon">
                            💗
                        </span>

                    </div>

                </div>


                <!-- PASSWORD -->

                <div class="input-group">

                    <label>
                        Password 🔐
                    </label>

                    <div class="input-wrapper">

                        <input
                            type="password"
                            name="password"
                            id="password"
                            placeholder="Masukkan password"
                            required
                        >

                        <span
                            class="icon"
                            onclick="togglePassword()"
                            style="cursor:pointer;"
                        >
                            👀
                        </span>

                    </div>

                </div>


                <!-- OPTIONS -->

                <div class="options">

                    <label class="remember">

                        <input
                            type="checkbox"
                            name="remember"
                        >

                        Ingat saya 💗

                    </label>


                    <a href="#" class="forgot">
                        Lupa password?
                    </a>

                </div>


                <!-- BUTTON LOGIN -->

                <button
                    class="btn"
                    type="submit"
                >
                    Login Sekarang 💖
                </button>

            </form>


            <!-- =========================
                 DIVIDER
            ========================= -->

            <div class="divider">
                atau login dengan
            </div>


            <!-- =========================
                 SOCIAL LOGIN
            ========================= -->

            <div class="social">

                <button type="button">
                    🌈 Google
                </button>

                <button type="button">
                    💙 Facebook
                </button>

            </div>


            <!-- =========================
                 REGISTER
            ========================= -->

            <div class="register">

                Belum punya akun?

                <a href="/register">
                    Daftar di sini 💕
                </a>

            </div>

        </div>

    </section>


    <!-- =========================
         JAVASCRIPT
    ========================= -->

    <script>

        function togglePassword() {

            const password =
                document.getElementById("password");

            if (password.type === "password") {

                password.type = "text";

            } else {

                password.type = "password";

            }

        }

    </script>

</body>
</html>