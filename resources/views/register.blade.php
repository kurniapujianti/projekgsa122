<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register 💕</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Trebuchet MS", Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #ffd6e7, #ffeef5);
            overflow: hidden;
            position: relative;
            padding: 20px;
        }

        /* Background */
        .decoration {
            position: absolute;
            color: rgba(255, 105, 155, 0.35);
            font-size: 35px;
            animation: floating 5s ease-in-out infinite;
        }

        .d1 { top: 8%; left: 10%; }
        .d2 { top: 15%; right: 10%; font-size: 50px; animation-delay: 1s; }
        .d3 { bottom: 12%; left: 12%; font-size: 45px; animation-delay: 2s; }
        .d4 { bottom: 8%; right: 15%; animation-delay: 3s; }

        @keyframes floating {
            0%, 100% { transform: translateY(0) rotate(-5deg); }
            50% { transform: translateY(-25px) rotate(10deg); }
        }

        /* Card */
        .register-card {
            width: 430px;
            max-width: 100%;
            background: rgba(255,255,255,.92);
            padding: 40px;
            border-radius: 30px;
            border: 4px solid #ffc1d9;
            box-shadow: 0 20px 50px rgba(244,114,154,.25);
            animation: appear .8s ease;
        }

        @keyframes appear {
            from {
                opacity: 0;
                transform: scale(.85) translateY(30px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        /* Logo */
        .logo {
            width: 75px;
            height: 75px;
            margin: -70px auto 18px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #ff9bc4, #ff5c9a);
            border-radius: 50%;
            border: 6px solid white;
            font-size: 35px;
            box-shadow: 0 8px 20px rgba(255,92,154,.3);
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-7px); }
        }

        h1 {
            text-align: center;
            color: #e94f88;
            font-size: 29px;
            margin-bottom: 5px;
        }

        .subtitle {
            text-align: center;
            color: #a8798c;
            font-size: 13px;
            margin-bottom: 20px;
        }

        /* Error Box Container */
        .error-alert {
            background: #ffe6f0;
            border: 2px dashed #ff9bc4;
            padding: 12px 15px;
            border-radius: 12px;
            margin-bottom: 18px;
        }

        .error-alert p {
            color: #d63384;
            font-size: 12px;
            margin-bottom: 4px;
        }

        .error-alert p:last-child {
            margin-bottom: 0;
        }

        /* Input */
        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
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
            padding: 14px 45px 14px 15px;
            border: 2px solid #ffd0df;
            border-radius: 15px;
            background: #fff7fa;
            outline: none;
            color: #8d4a66;
            font-size: 14px;
            transition: .3s;
        }

        input::placeholder {
            color: #d5a5b7;
        }

        input:focus {
            border-color: #ff7eae;
            background: white;
            box-shadow: 0 0 0 4px rgba(255,126,174,.12);
        }

        .icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 18px;
        }

        /* Terms */
        .terms {
            display: flex;
            gap: 8px;
            color: #a8798c;
            font-size: 11px;
            line-height: 1.5;
            margin: 18px 0;
            cursor: pointer;
        }

        .terms input {
            width: auto;
            accent-color: #ff6fa5;
            margin-top: 2px;
        }

        .terms a {
            color: #e94f88;
            text-decoration: none;
            font-weight: bold;
        }

        /* Button */
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
            transition: .3s;
            box-shadow: 0 8px 20px rgba(255,92,154,.25);
        }

        .btn:hover {
            transform: translateY(-3px) scale(1.01);
            box-shadow: 0 12px 25px rgba(255,92,154,.35);
        }

        .btn:active {
            transform: scale(.97);
        }

        /* Login */
        .login {
            text-align: center;
            margin-top: 22px;
            color: #a8798c;
            font-size: 13px;
        }

        .login a {
            color: #e94f88;
            text-decoration: none;
            font-weight: bold;
        }

        .login a:hover {
            color: #ff5c9a;
        }

        @media (max-width: 450px) {
            .register-card {
                padding: 35px 22px;
            }
        }
    </style>
</head>

<body>

    <!-- Dekorasi -->
    <div class="decoration d1">♡</div>
    <div class="decoration d2">♥</div>
    <div class="decoration d3">✦</div>
    <div class="decoration d4">♡</div>

    <div class="register-card">

        <div class="logo">
            🐻
        </div>

        <h1>Let's Join Us! 💕</h1>

        <p class="subtitle">
            Buat akun baru dan mulai perjalananmu ✨
        </p>

        <!-- Error Laravel -->
        @if ($errors->any())
            <div class="error-alert">
                @foreach ($errors->all() as $error)
                    <p>⚠️ {{ $error }}</p>
                @endforeach
            </div>
        @endif

        <!-- Form Register -->
        <form action="/register" method="POST">
            @csrf

            <!-- Input Nama / Username -->
            <div class="input-group">
                <label>Nama / Username 👤</label>

                <div class="input-wrapper">
                    <input 
                        type="text" 
                        name="name" 
                        value="{{ old('name') }}" 
                        placeholder="Masukkan nama kamu" 
                        required
                    >

                    <span class="icon">🌸</span>
                </div>
            </div>

            <!-- Input Password -->
            <div class="input-group">
                <label>Password 🔐</label>

                <div class="input-wrapper">
                    <input 
                        type="password" 
                        name="password" 
                        id="password" 
                        placeholder="Buat password" 
                        required
                    >

                    <span 
                        class="icon" 
                        onclick="togglePassword('password', this)" 
                        style="cursor:pointer"
                    >👀</span>
                </div>
            </div>

            <!-- Input Konfirmasi Password -->
            <div class="input-group">
                <label>Konfirmasi Password 💕</label>

                <div class="input-wrapper">
                    <input 
                        type="password" 
                        name="password_confirmation" 
                        id="confirmPassword" 
                        placeholder="Ulangi password" 
                        required
                    >

                    <span 
                        class="icon" 
                        onclick="togglePassword('confirmPassword', this)" 
                        style="cursor:pointer"
                    >👀</span>
                </div>
            </div>

            <!-- Terms -->
            <label class="terms">
                <input type="checkbox" required>

                <span>
                    Saya menyetujui 
                    <a href="#">syarat & ketentuan</a> 
                    yang berlaku 💗
                </span>
            </label>

            <!-- Button -->
            <button class="btn" type="submit">
                Daftar Sekarang 💖
            </button>

        </form>

        <!-- Link Login -->
        <div class="login">
            Sudah punya akun?
            <a href="/login">
                Login di sini 🌷
            </a>
        </div>

    </div>

    <script>
        function togglePassword(id, icon) {
            const input = document.getElementById(id);

            if (input.type === "password") {
                input.type = "text";
                icon.textContent = "🙈";
            } else {
                input.type = "password";
                icon.textContent = "👀";
            }
        }
    </script>

</body>
</html>
