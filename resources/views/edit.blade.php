<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Edit Produk 💕</title>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Trebuchet MS", Arial, sans-serif;
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
        }


        .navbar {

            width: 100%;

            background:
                rgba(
                    255,
                    255,
                    255,
                    .92
                );

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

            align-items: center;
            justify-content: center;

            background:
                linear-gradient(
                    135deg,
                    #ff8fbd,
                    #ff5c9a
                );

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
        }


        .container {

            width: 650px;

            max-width: 92%;

            margin: 50px auto;
        }


        .card {

            background:
                rgba(
                    255,
                    255,
                    255,
                    .95
                );

            border:
                3px solid #ffc1d9;

            border-radius: 25px;

            padding: 30px;

            box-shadow:
                0 15px 40px
                rgba(
                    244,
                    114,
                    154,
                    .15
                );
        }


        h1 {

            color: #e94f88;

            text-align: center;

            margin-bottom: 8px;
        }


        .subtitle {

            text-align: center;

            color: #a8798c;

            margin-bottom: 25px;
        }


        .form-group {

            margin-bottom: 18px;
        }


        label {

            display: block;

            color: #a84d72;

            font-weight: bold;

            font-size: 13px;

            margin-bottom: 7px;
        }


        input,
        select {

            width: 100%;

            padding: 13px;

            border:
                2px solid #ffd0df;

            border-radius: 13px;

            outline: none;

            color: #8d4a66;

            background: #fffafd;
        }


        input:focus,
        select:focus {

            border-color: #ff8fbd;
        }


        .buttons {

            display: flex;

            gap: 10px;

            margin-top: 25px;
        }


        .button {

            flex: 1;

            padding: 13px;

            border: none;

            border-radius: 13px;

            text-decoration: none;

            text-align: center;

            font-weight: bold;

            cursor: pointer;
        }


        .save {

            background:
                linear-gradient(
                    135deg,
                    #ff8fbd,
                    #ff5c9a
                );

            color: white;
        }


        .cancel {

            background: #fff0f6;

            color: #e94f88;
        }


        .current-image {

            width: 160px;

            height: 160px;

            object-fit: cover;

            border-radius: 15px;

            border:
                3px solid #ffd0df;

            display: block;

            margin-bottom: 12px;
        }


        .image-info {

            color: #a8798c;

            font-size: 12px;

            margin-top: 6px;

            display: block;
        }


        @media(max-width:700px) {

            .nav-menu a {

                display: none;
            }

        }

    </style>

</head>


<body>


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

            <a
                href="{{ route('produk.index') }}"
                class="active">

                🛍️ Produk

            </a>

            <a href="/latihan">
                📝 Latihan
            </a>

            <a href="/kalkulator">
                🧮 Kalkulator
            </a>

            <form
                action="{{ route('logout') }}"
                method="POST">

                @csrf

                <button
                    type="submit"
                    class="logout-btn">

                    🚪 Logout

                </button>

            </form>

        </div>

    </nav>


    <div class="container">

        <div class="card">

            <h1>
                ✏️ Edit Produk 💕
            </h1>


            <p class="subtitle">
                Ubah informasi produk kamu ✨
            </p>


            <form
                action="{{ route(
                    'produk.update',
                    $product->id
                ) }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                @method('PUT')


                <div class="form-group">

                    <label>
                        Nama Produk
                    </label>

                    <input
                        type="text"
                        name="name"
                        value="{{ old(
                            'name',
                            $product->name
                        ) }}"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>
                        Kategori
                    </label>

                    <select
                        name="category"
                        required>

                        <option
                            value="fashion"
                            {{ $product->category == 'fashion' ? 'selected' : '' }}>

                            👗 Fashion

                        </option>

                        <option
                            value="beauty"
                            {{ $product->category == 'beauty' ? 'selected' : '' }}>

                            💄 Beauty

                        </option>

                        <option
                            value="accessories"
                            {{ $product->category == 'accessories' ? 'selected' : '' }}>

                            🎀 Aksesoris

                        </option>

                        <option
                            value="gift"
                            {{ $product->category == 'gift' ? 'selected' : '' }}>

                            🎁 Gift

                        </option>

                    </select>

                </div>


                <div class="form-group">

                    <label>
                        Harga
                    </label>

                    <input
                        type="number"
                        name="price"
                        value="{{ old(
                            'price',
                            $product->price
                        ) }}"
                        min="0"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>
                        Harga Lama
                    </label>

                    <input
                        type="number"
                        name="old_price"
                        value="{{ old(
                            'old_price',
                            $product->old_price
                        ) }}"
                        min="0"
                    >

                </div>


                <div class="form-group">

                    <label>
                        Rating
                    </label>

                    <select
                        name="rating"
                        required>

                        @for($i = 5; $i >= 1; $i--)

                            <option
                                value="{{ $i }}"
                                {{ $product->rating == $i ? 'selected' : '' }}>

                                {{ str_repeat('⭐', $i) }}
                                {{ str_repeat('☆', 5 - $i) }}

                            </option>

                        @endfor

                    </select>

                </div>


                <div class="form-group">

                    <label>
                        Emoji Produk
                    </label>

                    <input
                        type="text"
                        name="emoji"
                        value="{{ old(
                            'emoji',
                            $product->emoji
                        ) }}"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>
                        Gambar Produk 🖼️
                    </label>


                    @if($product->image)

                        <img
                            src="{{ asset('storage/' . $product->image) }}"
                            alt="{{ $product->name }}"
                            class="current-image"
                        >

                        <span class="image-info">
                            Gambar saat ini. Pilih gambar baru
                            untuk menggantinya.
                        </span>

                    @endif


                    <input
                        type="file"
                        name="image"
                        accept="image/*"
                    >

                </div>


                <div class="buttons">

                    <a
                        href="{{ route('produk.index') }}"
                        class="button cancel">

                        ← Batal

                    </a>


                    <button
                        type="submit"
                        class="button save">

                        💕 Update Produk

                    </button>

                </div>


            </form>

        </div>

    </div>


</body>

</html>