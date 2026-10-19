<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Cute News 💕</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Trebuchet MS", Arial, sans-serif;
            background: linear-gradient(135deg, #ffd6e7, #fff0f6);
            color: #8d4a66;
            min-height: 100vh;
        }

        /* =========================
           NAVBAR SAMA SEPERTI HOME
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

        .nav-menu form {
            margin: 0;
        }

        .logout-btn {
            border: none;
            cursor: pointer;
            background: linear-gradient(135deg, #ff8fbd, #ff5c9a);
            color: white;
            padding: 10px 17px;
            border-radius: 12px;
            font-weight: bold;
            font-family: inherit;
            transition: .3s;
        }

        .logout-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 15px rgba(255, 92, 154, .25);
        }

        /* TOMBOL HAMBURGER */

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
           KONTEN BERITA
        ========================= */

        .container {
            width: 90%;
            max-width: 1150px;
            margin: 35px auto;
        }

        .heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
            margin-bottom: 25px;
        }

        h1, h2, h3 {
            color: #bd4f7b;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(135deg, #ff8fbd, #ff5c9a);
            color: white;
            text-decoration: none;
            font-family: inherit;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            margin: 3px;
        }

        .btn:hover {
            opacity: .85;
        }

        .btn-secondary {
            background: #f5d3e1;
            color: #914365;
        }

        .btn-danger {
            background: #e85b78;
        }

        .card, .form-card, .detail-card {
            background: white;
            border-radius: 20px;
            padding: 22px;
            box-shadow: 0 5px 22px #c65e8415;
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 22px;
        }

        .card img, .detail-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 14px;
            margin-bottom: 15px;
        }

        .category {
            display: inline-block;
            background: #ffe1ed;
            color: #bd4f7b;
            padding: 6px 11px;
            border-radius: 20px;
            font-size: 12px;
            margin-bottom: 10px;
        }

        .card h3 {
            margin-bottom: 10px;
        }

        .card p {
            line-height: 1.6;
            margin-bottom: 12px;
            overflow-wrap: anywhere;
        }

        .muted {
            color: #a77b8e;
            font-size: 13px;
        }

        .form-card {
            max-width: 750px;
            margin: auto;
        }

        .form-card h1 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 17px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 7px;
        }

        input, textarea, select {
            width: 100%;
            padding: 12px;
            border: 1px solid #f0bfd2;
            border-radius: 10px;
            background: #fffafd;
            color: #754058;
            font-family: inherit;
            font-size: 15px;
        }

        textarea {
            min-height: 130px;
            resize: vertical;
        }

        input:focus, textarea:focus, select:focus {
            outline: 2px solid #ffb1ce;
        }

        .alert {
            padding: 14px 18px;
            background: #fff;
            border-left: 5px solid #e94f88;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .error {
            color: #d33159;
            font-size: 13px;
            margin-top: 5px;
        }

        .detail-card {
            max-width: 850px;
            margin: auto;
            line-height: 1.8;
            overflow-wrap: anywhere;
        }

        .detail-card h1 {
            margin: 10px 0;
        }

        .detail-card .detail-body {
            white-space: pre-line;
            margin: 20px 0;
        }

        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            align-items: center;
        }

        .pagination {
            margin-top: 25px;
        }

        .pagination nav {
            box-shadow: none;
            background: transparent;
            padding: 0;
            position: static;
            border: none;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #ad6885;
        }

        /* =========================
           RESPONSIVE TABLET
        ========================= */

        @media (max-width: 850px) {

            .navbar {
                padding: 12px 5%;
            }

            .menu-toggle {
                display: flex;
                justify-content: center;
                align-items: center;
            }

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

            .news-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        /* =========================
           RESPONSIVE HP
        ========================= */

        @media (max-width: 600px) {

            .navbar {
                padding: 12px 5%;
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

            .container {
                width: 92%;
                margin: 25px auto;
            }

            .news-grid {
                grid-template-columns: 1fr;
            }

            .heading {
                align-items: flex-start;
            }

            .card, .form-card, .detail-card {
                padding: 17px;
            }
        }
    </style>
</head>

<body>

<!-- NAVBAR SAMA SEPERTI HOME -->

<nav class="navbar">

    <div class="brand">
        <div class="brand-icon">🧸</div>
        My Cute News 💕
    </div>

    <button
        class="menu-toggle"
        id="menuToggle"
        type="button"
        aria-label="Buka menu"
        aria-expanded="false"
    >
        ☰
    </button>

    <div class="nav-menu" id="navMenu">

        <a href="{{ url('/home') }}">
            🏠 Home
        </a>

        <a href="{{ route('berita') }}" class="active">
            📰 Berita
        </a>

        <a href="{{ url('/produk') }}">
            🛍️ Produk
        </a>

        <a href="{{ url('/latihan') }}">
            📝 Latihan
        </a>

        <a href="{{ url('/kalkulator') }}">
            🧮 Kalkulator
        </a>

        @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf

                <button type="submit" class="logout-btn">
                    🚪 Logout
                </button>
            </form>
        @else
            <a href="{{ route('login') }}">
                🔐 Login
            </a>
        @endauth

    </div>

</nav>

<div class="container">

    {{-- NOTIFIKASI BERHASIL --}}
    @if (session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    {{-- PESAN VALIDASI --}}
    @if ($errors->any())
        <div class="alert">
            <strong>Periksa kembali data kamu, ya! 💗</strong>
            <ul style="padding-left: 20px; margin-top: 8px;">
                @foreach ($errors->all() as $error)
                    <li class="error">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- ================================================== --}}
    {{-- HALAMAN INDEX / DAFTAR BERITA --}}
    {{-- ================================================== --}}
    @if ($mode === 'index')

        <div class="heading">
            <div>
                <h1>Berita Terbaru 💕</h1>
                <p>Temukan berita dan informasi menarik hari ini.</p>
            </div>

            <a href="{{ route('berita.create') }}" class="btn">
                + Tambah Berita
            </a>
        </div>

        @if ($beritas->count())
            <div class="news-grid">
                @foreach ($beritas as $item)
                    <div class="card">

                        @if ($item->gambar)
                            <img
                                src="{{ asset('storage/' . $item->gambar) }}"
                                alt="{{ $item->judul }}"
                            >
                        @endif

                        <span class="category">
                            {{ $item->kategori }}
                        </span>

                        <h3>{{ $item->judul }}</h3>

                        <p>{{ $item->ringkasan }}</p>

                        <p class="muted">
                            @if ($item->tanggal_publikasi)
                                {{ $item->tanggal_publikasi->format('d M Y H:i') }}
                            @else
                                Belum dijadwalkan
                            @endif
                        </p>

                        <div class="actions">
                            <a
                                href="{{ route('berita.show', $item) }}"
                                class="btn"
                            >
                                Detail
                            </a>

                            <a
                                href="{{ route('berita.edit', $item) }}"
                                class="btn btn-secondary"
                            >
                                Edit
                            </a>

                            <form
                                action="{{ route('berita.destroy', $item) }}"
                                method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus berita ini?')"
                            >
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="pagination">
                {{ $beritas->links() }}
            </div>
        @else
            <div class="card">
                <h3>Belum ada berita 🥺</h3>
                <p>Yuk, tambahkan berita pertamamu!</p>
                <a href="{{ route('berita.create') }}" class="btn">
                    Tambah Berita
                </a>
            </div>
        @endif

    {{-- ================================================== --}}
    {{-- HALAMAN CREATE / TAMBAH BERITA --}}
    {{-- ================================================== --}}
    @elseif ($mode === 'create')

        <div class="form-card">
            <h1>Tambah Berita Baru 💗</h1>

            <form
                action="{{ route('berita.store') }}"
                method="POST"
                enctype="multipart/form-data"
            >
                @csrf

                <div class="form-group">
                    <label for="judul">Judul Berita</label>
                    <input
                        id="judul"
                        type="text"
                        name="judul"
                        value="{{ old('judul') }}"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input
                        id="kategori"
                        type="text"
                        name="kategori"
                        value="{{ old('kategori', 'Umum') }}"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="ringkasan">Ringkasan Berita</label>
                    <textarea
                        id="ringkasan"
                        name="ringkasan"
                        required
                    >{{ old('ringkasan') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="isi">Isi Berita</label>
                    <textarea
                        id="isi"
                        name="isi"
                        required
                    >{{ old('isi') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="gambar">Gambar Berita (opsional)</label>
                    <input
                        id="gambar"
                        type="file"
                        name="gambar"
                        accept=".jpg,.jpeg,.png,.webp"
                    >
                    <small class="muted">
                        Format JPG, JPEG, PNG, atau WEBP. Maksimal 2 MB.
                    </small>
                </div>

                <div class="form-group">
                    <label for="sumber_url">URL Sumber Berita (opsional)</label>
                    <input
                        id="sumber_url"
                        type="url"
                        name="sumber_url"
                        value="{{ old('sumber_url') }}"
                        placeholder="https://contoh.com"
                    >
                </div>

                <div class="form-group">
                    <label for="tanggal_publikasi">Tanggal Publikasi (opsional)</label>
                    <input
                        id="tanggal_publikasi"
                        type="datetime-local"
                        name="tanggal_publikasi"
                        value="{{ old('tanggal_publikasi') }}"
                    >
                    <small class="muted">
                        Kosongkan jika berita belum ingin dipublikasikan.
                    </small>
                </div>

                <button type="submit" class="btn">
                    Simpan Berita 💕
                </button>

                <a href="{{ route('berita') }}" class="btn btn-secondary">
                    Kembali
                </a>
            </form>
        </div>

    {{-- ================================================== --}}
    {{-- HALAMAN EDIT BERITA --}}
    {{-- ================================================== --}}
    @elseif ($mode === 'edit')

        <div class="form-card">
            <h1>Edit Berita ✏️</h1>

            <form
                action="{{ route('berita.update', $berita) }}"
                method="POST"
                enctype="multipart/form-data"
            >
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="judul">Judul Berita</label>
                    <input
                        id="judul"
                        type="text"
                        name="judul"
                        value="{{ old('judul', $berita->judul) }}"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input
                        id="kategori"
                        type="text"
                        name="kategori"
                        value="{{ old('kategori', $berita->kategori) }}"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="ringkasan">Ringkasan Berita</label>
                    <textarea
                        id="ringkasan"
                        name="ringkasan"
                        required
                    >{{ old('ringkasan', $berita->ringkasan) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="isi">Isi Berita</label>
                    <textarea
                        id="isi"
                        name="isi"
                        required
                    >{{ old('isi', $berita->isi) }}</textarea>
                </div>

                @if ($berita->gambar)
                    <div class="form-group">
                        <label>Gambar Saat Ini</label>
                        <img
                            src="{{ asset('storage/' . $berita->gambar) }}"
                            alt="{{ $berita->judul }}"
                            style="width: 180px; max-width: 100%; border-radius: 12px;"
                        >
                    </div>
                @endif

                <div class="form-group">
                    <label for="gambar">Ganti Gambar (opsional)</label>
                    <input
                        id="gambar"
                        type="file"
                        name="gambar"
                        accept=".jpg,.jpeg,.png,.webp"
                    >
                </div>

                <div class="form-group">
                    <label for="sumber_url">URL Sumber Berita (opsional)</label>
                    <input
                        id="sumber_url"
                        type="url"
                        name="sumber_url"
                        value="{{ old('sumber_url', $berita->sumber_url) }}"
                    >
                </div>

                <div class="form-group">
                    <label for="tanggal_publikasi">Tanggal Publikasi</label>
                    <input
                        id="tanggal_publikasi"
                        type="datetime-local"
                        name="tanggal_publikasi"
                        value="{{ old(
                            'tanggal_publikasi',
                            $berita->tanggal_publikasi
                                ? \Illuminate\Support\Carbon::parse($berita->tanggal_publikasi)->format('Y-m-d\TH:i')
                                : ''
                        ) }}"
                    >
                </div>

                <button type="submit" class="btn">
                    Simpan Perubahan 💕
                </button>

                <a href="{{ route('berita') }}" class="btn btn-secondary">
                    Batal
                </a>
            </form>
        </div>

    {{-- ================================================== --}}
    {{-- HALAMAN SHOW / DETAIL BERITA --}}
    {{-- ================================================== --}}
    @elseif ($mode === 'show')

        <div class="detail-card">

            <span class="category">
                {{ $berita->kategori }}
            </span>

            <h1>{{ $berita->judul }}</h1>

            <p class="muted">
                @if ($berita->tanggal_publikasi)
                    Dipublikasikan:
                    {{ $berita->tanggal_publikasi->format('d M Y, H:i') }}
                @else
                    Belum dipublikasikan
                @endif
            </p>

            @if ($berita->gambar)
                <img
                    class="detail-image"
                    src="{{ asset('storage/' . $berita->gambar) }}"
                    alt="{{ $berita->judul }}"
                >
            @endif

            <h3>Ringkasan</h3>
            <p>{{ $berita->ringkasan }}</p>

            <h3>Isi Berita</h3>
            <div class="detail-body">{{ $berita->isi }}</div>

            @if ($berita->sumber_url)
                <p>
                    Sumber:
                    <a
                        href="{{ $berita->sumber_url }}"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        Baca sumber berita
                    </a>
                </p>
            @endif

            <div class="actions" style="margin-top: 20px;">
                <a href="{{ route('berita') }}" class="btn btn-secondary">
                    Kembali
                </a>

                <a
                    href="{{ route('berita.edit', $berita) }}"
                    class="btn"
                >
                    Edit Berita
                </a>

                <form
                    action="{{ route('berita.destroy', $berita) }}"
                    method="POST"
                    onsubmit="return confirm('Yakin ingin menghapus berita ini?')"
                >
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">
                        Hapus Berita
                    </button>
                </form>
            </div>
        </div>

    @endif

</div>

<footer>
    Made with 💗 My Cute News
</footer>

<!-- JAVASCRIPT HAMBURGER -->
<script>
    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');

    menuToggle.addEventListener('click', function () {
        navMenu.classList.toggle('show');

        const isOpen = navMenu.classList.contains('show');

        menuToggle.innerHTML = isOpen ? '✕' : '☰';
        menuToggle.setAttribute('aria-expanded', isOpen);
    });

    // Tutup menu setelah link dipilih
    document.querySelectorAll('.nav-menu a').forEach(function (link) {
        link.addEventListener('click', function () {
            navMenu.classList.remove('show');
            menuToggle.innerHTML = '☰';
            menuToggle.setAttribute('aria-expanded', 'false');
        });
    });
</script>

</body>
</html>