<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home 💕</title>

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
            overflow-x: hidden;
        }

        /* =========================
           BACKGROUND DECORATION
        ========================= */

        .decoration {
            position: fixed;
            color: rgba(255, 105, 155, 0.25);
            font-size: 35px;
            animation: floating 5s ease-in-out infinite;
            z-index: 0;
            pointer-events: none;
        }

        .d1 {
            top: 8%;
            left: 5%;
        }

        .d2 {
            top: 15%;
            right: 7%;
            font-size: 50px;
            animation-delay: 1s;
        }

        .d3 {
            bottom: 15%;
            left: 8%;
            font-size: 45px;
            animation-delay: 2s;
        }

        .d4 {
            bottom: 8%;
            right: 10%;
            animation-delay: 3s;
        }

        .d5 {
            top: 50%;
            left: 2%;
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
            position: sticky;
            top: 0;
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

        .logout-btn {
            border: none;
            cursor: pointer;
            background: linear-gradient(135deg, #ff8fbd, #ff5c9a);
            color: white;
            padding: 10px 17px;
            border-radius: 12px;
            font-weight: bold;
            transition: .3s;
        }

        .logout-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 15px rgba(255, 92, 154, .25);
        }

        /* =========================
           MENU BUTTON / HAMBURGER
        ========================= */

        .menu-toggle {
            display: none;
            border: none;
            background: linear-gradient(135deg, #ff8fbd, #ff5c9a);
            color: white;
            width: 45px;
            height: 45px;
            border-radius: 12px;
            font-size: 24px;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(255, 92, 154, .20);
        }

        .menu-toggle:hover {
            transform: scale(1.05);
        }

        /* =========================
           MAIN
        ========================= */

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 35px auto;
            position: relative;
            z-index: 1;
        }

        /* =========================
           WELCOME
        ========================= */

        .welcome-card {
            background: rgba(255, 255, 255, .94);
            border: 3px solid #ffc1d9;
            border-radius: 30px;
            padding: 30px 35px;
            box-shadow: 0 15px 40px rgba(244, 114, 154, .18);
            margin-bottom: 25px;
            animation: appear .7s ease;
        }

        @keyframes appear {
            from {
                opacity: 0;
                transform: translateY(25px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .welcome-small {
            color: #e94f88;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 7px;
        }

        .welcome-card h1 {
            color: #e94f88;
            font-size: 30px;
            margin-bottom: 8px;
        }

        .welcome-card p {
            color: #a8798c;
            font-size: 14px;
            line-height: 1.6;
        }

        /* =========================
           CATEGORY
        ========================= */

        .category-box {
            background: rgba(255, 255, 255, .94);
            border: 2px solid #ffd0df;
            border-radius: 18px;
            padding: 12px;
            margin-bottom: 25px;
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            box-shadow: 0 8px 20px rgba(244,114,154,.10);
        }

        .category {
            text-decoration: none;
            color: #a84d72;
            background: #fff3f8;
            border: 1px solid #ffd0df;
            padding: 8px 14px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: bold;
            transition: .3s;
        }

        .category:hover,
        .category.active {
            background: linear-gradient(135deg, #ff8fbd, #ff5c9a);
            color: white;
            border-color: transparent;
        }

        /* =========================
           BREAKING NEWS
        ========================= */

        .breaking-news {
            display: flex;
            align-items: center;
            background: #fff;
            border: 2px solid #ffc1d9;
            border-radius: 18px;
            overflow: hidden;
            margin-bottom: 25px;
            box-shadow: 0 8px 20px rgba(244,114,154,.10);
        }

        .breaking-title {
            background: linear-gradient(135deg, #ff8fbd, #ff5c9a);
            color: white;
            padding: 13px 18px;
            font-size: 12px;
            font-weight: bold;
            white-space: nowrap;
        }

        .breaking-text {
            padding: 13px 18px;
            color: #a8798c;
            font-size: 12px;
        }

        /* =========================
           NEWS LAYOUT
        ========================= */

        .news-layout {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 22px;
        }

        /* =========================
           HEADLINE
        ========================= */

        .headline-card {
            background: rgba(255,255,255,.94);
            border: 2px solid #ffd0df;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(244,114,154,.12);
            transition: .3s;
        }

        .headline-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(244,114,154,.18);
        }

        .headline-image {
            height: 310px;
            background:
                linear-gradient(
                    rgba(255, 92, 154, .10),
                    rgba(125, 47, 83, .60)
                ),
                url("https://images.unsplash.com/photo-1504711434969-e33886168f5c?auto=format&fit=crop&w=1200&q=80")
                center/cover;
            display: flex;
            align-items: flex-end;
            padding: 25px;
        }

        .headline-content {
            color: white;
        }

        .headline-label {
            display: inline-block;
            background: #ff5c9a;
            padding: 7px 12px;
            border-radius: 10px;
            font-size: 10px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .headline-content h2 {
            font-size: 26px;
            line-height: 1.3;
            margin-bottom: 8px;
        }

        .headline-content p {
            font-size: 12px;
            line-height: 1.6;
        }

        /* =========================
           POPULAR
        ========================= */

        .popular-card {
            background: rgba(255,255,255,.94);
            border: 2px solid #ffd0df;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(244,114,154,.12);
        }

        .popular-title {
            padding: 18px;
            border-bottom: 2px solid #ffd0df;
            color: #e94f88;
            font-size: 19px;
            font-weight: bold;
        }

        .popular-item {
            display: flex;
            gap: 12px;
            padding: 15px;
            border-bottom: 1px solid #ffe1eb;
            transition: .3s;
        }

        .popular-item:last-child {
            border-bottom: none;
        }

        .popular-item:hover {
            background: #fff7fa;
        }

        .popular-number {
            min-width: 30px;
            color: #ff76a8;
            font-size: 22px;
            font-weight: bold;
        }

        .popular-item h3 {
            color: #8d4a66;
            font-size: 13px;
            line-height: 1.4;
        }

        .popular-item p {
            color: #b58b9d;
            font-size: 10px;
            margin-top: 6px;
        }

        /* =========================
           SECTION TITLE
        ========================= */

        .section-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 35px 0 18px;
            padding-bottom: 10px;
            border-bottom: 2px solid #ffc1d9;
        }

        .section-title h2 {
            color: #e94f88;
            font-size: 24px;
        }

        .section-title p {
            color: #a8798c;
            font-size: 12px;
        }

        .see-all {
            text-decoration: none;
            color: #e94f88;
            font-size: 12px;
            font-weight: bold;
        }

        /* =========================
           NEWS GRID
        ========================= */

        .news-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .news-card {
            background: rgba(255,255,255,.94);
            border: 2px solid #ffd0df;
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(244,114,154,.10);
            transition: .3s;
        }

        .news-card:hover {
            transform: translateY(-6px);
            border-color: #ff9fc2;
            box-shadow: 0 15px 30px rgba(244,114,154,.18);
        }

        .news-image {
            height: 155px;
            background-size: cover;
            background-position: center;
        }

        .image-1 {
            background-image:
                linear-gradient(rgba(255,150,190,.08),rgba(0,0,0,.15)),
                url("https://images.unsplash.com/photo-1495020689067-958852a7765e?auto=format&fit=crop&w=800&q=80");
        }

        .image-2 {
            background-image:
                linear-gradient(rgba(255,150,190,.08),rgba(0,0,0,.15)),
                url("https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=80");
        }

        .image-3 {
            background-image:
                linear-gradient(rgba(255,150,190,.08),rgba(0,0,0,.15)),
                url("https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80");
        }

        .image-4 {
            background-image:
                linear-gradient(rgba(255,150,190,.08),rgba(0,0,0,.15)),
                url("https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=800&q=80");
        }

        .image-5 {
            background-image:
                linear-gradient(rgba(255,150,190,.08),rgba(0,0,0,.15)),
                url("https://images.unsplash.com/photo-1449824913935-59a10b8d2000?auto=format&fit=crop&w=800&q=80");
        }

        .image-6 {
            background-image:
                linear-gradient(rgba(255,150,190,.08),rgba(0,0,0,.15)),
                url("https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=800&q=80");
        }

        .news-content {
            padding: 17px;
        }

        .news-category {
            color: #e94f88;
            font-size: 10px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .news-content h3 {
            color: #8d4a66;
            font-size: 16px;
            line-height: 1.4;
            margin: 7px 0;
        }

        .news-content p {
            color: #a8798c;
            font-size: 11px;
            line-height: 1.6;
        }

        .news-meta {
            color: #c294a8;
            font-size: 10px;
            margin-top: 12px;
        }

        /* =========================
           USER PROFILE
        ========================= */

        .profile-card {
            margin-top: 30px;
            background: rgba(255,255,255,.94);
            border: 3px solid #ffc1d9;
            border-radius: 25px;
            padding: 25px;
            display: flex;
            align-items: center;
            gap: 18px;
            box-shadow: 0 10px 30px rgba(244,114,154,.12);
        }

        .profile-avatar {
            width: 65px;
            height: 65px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #ff8fbd, #ff5c9a);
            border: 4px solid white;
            font-size: 30px;
            box-shadow: 0 7px 18px rgba(255,92,154,.2);
        }

        .profile-info {
            flex: 1;
        }

        .profile-info h3 {
            color: #e94f88;
            font-size: 18px;
            margin-bottom: 5px;
        }

        .profile-info p {
            color: #a8798c;
            font-size: 12px;
        }

        .profile-badge {
            background: #ffe5ef;
            color: #e94f88;
            padding: 9px 15px;
            border-radius: 12px;
            font-size: 10px;
            font-weight: bold;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            text-align: center;
            padding: 30px 10px;
            color: #b58b9d;
            font-size: 12px;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 850px) {

            .navbar {
                padding: 12px 5%;
            }

            /* TOMBOL TIGA GARIS MUNCUL */
            .menu-toggle {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            /* MENU AWALNYA DISEMBUNYIKAN */
            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                right: 5%;
                width: 230px;
                background: rgba(255, 255, 255, 0.98);
                border: 2px solid #ffc1d9;
                border-radius: 18px;
                padding: 12px;
                flex-direction: column;
                align-items: stretch;
                gap: 5px;
                box-shadow: 0 10px 30px rgba(244, 114, 154, .20);
            }

            /* MENU DIBUKA */
            .nav-menu.show {
                display: flex;
            }

            .nav-menu a {
                display: block;
                width: 100%;
                padding: 12px 15px;
            }

            .nav-menu form {
                width: 100%;
            }

            .logout-btn {
                width: 100%;
                padding: 12px 15px;
            }

            .news-layout {
                grid-template-columns: 1fr;
            }

            .news-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .headline-image {
                height: 300px;
            }
        }

        @media (max-width: 550px) {

            .navbar {
                padding: 12px 5%;
            }

            .container {
                width: 94%;
                margin: 25px auto;
            }

            .brand {
                font-size: 17px;
            }

            .brand-icon {
                width: 38px;
                height: 38px;
                font-size: 19px;
            }

            .menu-toggle {
                width: 40px;
                height: 40px;
                font-size: 21px;
            }

            .nav-menu {
                right: 5%;
                width: 90%;
            }

            .welcome-card {
                padding: 25px 20px;
            }

            .welcome-card h1 {
                font-size: 24px;
            }

            .breaking-news {
                display: block;
            }

            .breaking-title {
                display: block;
                text-align: center;
            }

            .headline-image {
                height: 270px;
                padding: 20px;
            }

            .headline-content h2 {
                font-size: 21px;
            }

            .news-grid {
                grid-template-columns: 1fr;
            }

            .section-title {
                display: block;
            }

            .section-title p {
                margin-top: 5px;
            }

            .see-all {
                display: none;
            }

            .profile-card {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <!-- DEKORASI -->

    <div class="decoration d1">♡</div>
    <div class="decoration d2">♥</div>
    <div class="decoration d3">✦</div>
    <div class="decoration d4">♡</div>
    <div class="decoration d5">♥</div>


    <!-- NAVBAR -->

    <nav class="navbar">

        <div class="brand">

            <div class="brand-icon">
                🧸
            </div>

            My Cute News 💕

        </div>


        <!-- TOMBOL MENU ☰ -->

        <button class="menu-toggle" id="menuToggle" type="button">
            ☰
        </button>


        <div class="nav-menu" id="navMenu">

            <a href="/home" class="active">
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

            <a href="/kalkulator">
                🧮 Kalkulator
            </a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf

                <button type="submit" class="logout-btn">
                    🚪 Logout
                </button>
            </form>

        </div>

    </nav>


    <main class="container">


        <!-- WELCOME -->

        <div class="welcome-card">

            <div class="welcome-small">
                ✨ SELAMAT DATANG DI MY CUTE NEWS
            </div>

            <h1>
                Hai, {{ Auth::user()->name }}! 💕
            </h1>

            <p>
                Temukan berbagai informasi terbaru dan menarik
                hanya di halaman utama kami. 🌷
            </p>

        </div>


        <!-- KATEGORI -->

        <div class="category-box">

            <a href="#" class="category active">
                📰 Semua
            </a>

            <a href="#" class="category">
                🌸 Lifestyle
            </a>

            <a href="#" class="category">
                💻 Teknologi
            </a>

            <a href="#" class="category">
                🎓 Pendidikan
            </a>

            <a href="#" class="category">
                💰 Ekonomi
            </a>

            <a href="#" class="category">
                ⚽ Olahraga
            </a>

            <a href="#" class="category">
                🌎 Dunia
            </a>

        </div>


        <!-- BREAKING NEWS -->

        <div class="breaking-news">

            <div class="breaking-title">
                🔥 BERITA TERBARU
            </div>

            <div class="breaking-text">
                Informasi terbaru dan berita pilihan hari ini
                sedang diperbarui untuk kamu 💕
            </div>

        </div>


        <!-- HEADLINE + POPULER -->

        <div class="news-layout">


            <!-- HEADLINE -->

            <div class="headline-card">

                <div class="headline-image">

                    <div class="headline-content">

                        <span class="headline-label">
                            ⭐ BERITA UTAMA
                        </span>

                        <h2>
                            Perkembangan Teknologi Terus Membawa
                            Perubahan di Era Digital
                        </h2>

                        <p>
                            Simak informasi terbaru seputar teknologi,
                            pendidikan, dan perkembangan kehidupan
                            masyarakat modern.
                        </p>

                    </div>

                </div>

            </div>


            <!-- POPULER -->

            <div class="popular-card">

                <div class="popular-title">
                    🔥 Berita Populer
                </div>


                <div class="popular-item">

                    <div class="popular-number">
                        01
                    </div>

                    <div>

                        <h3>
                            Teknologi semakin berkembang di kehidupan sehari-hari
                        </h3>

                        <p>
                            2 jam yang lalu · 💕 1.2K dibaca
                        </p>

                    </div>

                </div>


                <div class="popular-item">

                    <div class="popular-number">
                        02
                    </div>

                    <div>

                        <h3>
                            Pendidikan digital semakin diminati generasi muda
                        </h3>

                        <p>
                            3 jam yang lalu · 💕 980 dibaca
                        </p>

                    </div>

                </div>


                <div class="popular-item">

                    <div class="popular-number">
                        03
                    </div>

                    <div>

                        <h3>
                            Tren gaya hidup baru menjadi perhatian masyarakat
                        </h3>

                        <p>
                            4 jam yang lalu · 💕 850 dibaca
                        </p>

                    </div>

                </div>


                <div class="popular-item">

                    <div class="popular-number">
                        04
                    </div>

                    <div>

                        <h3>
                            Informasi ekonomi terbaru hari ini
                        </h3>

                        <p>
                            5 jam yang lalu · 💕 720 dibaca
                        </p>

                    </div>

                </div>

            </div>

        </div>


        <!-- BERITA TERKINI -->

        <div class="section-title">

            <div>

                <h2>
                    📰 Berita Terkini
                </h2>

                <p>
                    Informasi terbaru pilihan untuk kamu 🌷
                </p>

            </div>

            <a href="#" class="see-all">
                Lihat Semua →
            </a>

        </div>


        <div class="news-grid">


            <!-- NEWS 1 -->

            <article class="news-card">

                <div class="news-image image-1"></div>

                <div class="news-content">

                    <div class="news-category">
                        🌸 Lifestyle
                    </div>

                    <h3>
                        Tren kehidupan modern yang semakin berkembang
                    </h3>

                    <p>
                        Berbagai tren baru mulai menjadi bagian
                        dari kehidupan masyarakat sehari-hari.
                    </p>

                    <div class="news-meta">
                        🕐 2 jam yang lalu · 💕 1.2K dibaca
                    </div>

                </div>

            </article>


            <!-- NEWS 2 -->

            <article class="news-card">

                <div class="news-image image-2"></div>

                <div class="news-content">

                    <div class="news-category">
                        🎓 Pendidikan
                    </div>

                    <h3>
                        Perkembangan pendidikan di era digital
                    </h3>

                    <p>
                        Teknologi memberikan berbagai peluang
                        baru dalam dunia pendidikan.
                    </p>

                    <div class="news-meta">
                        🕐 3 jam yang lalu · 💕 980 dibaca
                    </div>

                </div>

            </article>


            <!-- NEWS 3 -->

            <article class="news-card">

                <div class="news-image image-3"></div>

                <div class="news-content">

                    <div class="news-category">
                        💻 Teknologi
                    </div>

                    <h3>
                        Inovasi teknologi terus berkembang
                    </h3>

                    <p>
                        Berbagai inovasi hadir untuk membantu
                        aktivitas masyarakat modern.
                    </p>

                    <div class="news-meta">
                        🕐 4 jam yang lalu · 💕 850 dibaca
                    </div>

                </div>

            </article>


            <!-- NEWS 4 -->

            <article class="news-card">

                <div class="news-image image-4"></div>

                <div class="news-content">

                    <div class="news-category">
                        💻 Teknologi
                    </div>

                    <h3>
                        Dunia digital membuka peluang baru
                    </h3>

                    <p>
                        Perkembangan teknologi memberikan banyak
                        kesempatan untuk generasi muda.
                    </p>

                    <div class="news-meta">
                        🕐 5 jam yang lalu · 💕 740 dibaca
                    </div>

                </div>

            </article>


            <!-- NEWS 5 -->

            <article class="news-card">

                <div class="news-image image-5"></div>

                <div class="news-content">

                    <div class="news-category">
                        🌎 Dunia
                    </div>

                    <h3>
                        Berita dan informasi dunia terbaru
                    </h3>

                    <p>
                        Simak berbagai informasi terbaru dari
                        berbagai penjuru dunia.
                    </p>

                    <div class="news-meta">
                        🕐 6 jam yang lalu · 💕 620 dibaca
                    </div>

                </div>

            </article>


            <!-- NEWS 6 -->

            <article class="news-card">

                <div class="news-image image-6"></div>

                <div class="news-content">

                    <div class="news-category">
                        💰 Ekonomi
                    </div>

                    <h3>
                        Informasi ekonomi terbaru hari ini
                    </h3>

                    <p>
                        Berbagai perkembangan ekonomi menjadi
                        informasi penting bagi masyarakat.
                    </p>

                    <div class="news-meta">
                        🕐 7 jam yang lalu · 💕 530 dibaca
                    </div>

                </div>

            </article>


        </div>


        <!-- PROFILE -->

        <div class="profile-card">

            <div class="profile-avatar">
                👤
            </div>

            <div class="profile-info">

                <h3>
                    {{ Auth::user()->name }}
                </h3>

                <p>
                    Kamu sedang login sebagai pengguna aplikasi.
                    Selamat membaca berita dan menikmati fitur
                    yang tersedia! 💕
                </p>

            </div>

            <div class="profile-badge">
                ✨ USER AKTIF
            </div>

        </div>


    </main>


    <!-- FOOTER -->

    <footer>

        💕 <strong>My Cute News</strong> — Berita dengan sentuhan manis ✨

        <br><br>

        © {{ date('Y') }} All Rights Reserved 🌷

    </footer>


    <!-- =========================
         JAVASCRIPT MENU
    ========================= -->

    <script>

        const menuToggle = document.getElementById('menuToggle');
        const navMenu = document.getElementById('navMenu');

        menuToggle.addEventListener('click', function () {

            navMenu.classList.toggle('show');

            if (navMenu.classList.contains('show')) {
                menuToggle.innerHTML = '✕';
            } else {
                menuToggle.innerHTML = '☰';
            }

        });


        // Menutup menu setelah memilih link
        document.querySelectorAll('.nav-menu a').forEach(function(link) {

            link.addEventListener('click', function() {
                navMenu.classList.remove('show');
                menuToggle.innerHTML = '☰';
            });

        });

    </script>

</body>
</html>