\<!DOCTYPE html> 
<html lang="id"> 
 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 
    <title>Tambah Produk 💕</title> 
 
    <style> 
        * { 
            box-sizing: border-box; 
            font-family: "Trebuchet MS", Arial, sans-serif; 
        } 
 
        body { 
            margin: 0; 
            min-height: 100vh; 
            background: linear-gradient(135deg, #ffd6e7, #ffeef5); 
            color: #8d4a66; 
        } 
 
        .container { 
            width: 600px; 
            max-width: 92%; 
            margin: 50px auto; 
        } 
 
        .card { 
            background: white; 
            padding: 30px; 
            border-radius: 25px; 
            border: 3px solid #ffc1d9; 
            box-shadow: 0 10px 30px rgba(244, 114, 154, .15); 
        } 
 
        h1 { 
            color: #e94f88; 
            margin-top: 0; 
        } 
 
        .form-group { 
            margin-bottom: 18px; 
        } 
 
        label { 
            display: block; 
            margin-bottom: 7px; 
            font-weight: bold; 
            color: #a84d72; 
        } 
 
        input, 
        select { 
            width: 100%; 
            padding: 12px; 
            border: 2px solid #ffd0df; 
            border-radius: 12px; 
            outline: none; 
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
 
        button, 
        .back { 
            flex: 1; 
            padding: 13px; 
            border: none; 
            border-radius: 12px; 
            cursor: pointer; 
            text-align: center; 
            text-decoration: none; 
            font-weight: bold; 
        } 
 
        button { 
            background: linear-gradient(135deg, #ff8fbd, #ff5c9a); 
            color: white; 
        } 
 
        .back { 
            background: #fff0f6; 
            color: #e94f88; 
        } 
 
        .error { 
            background: #ffe6ec; 
            color: #dc5579; 
            padding: 12px; 
            border-radius: 12px; 
            margin-bottom: 20px; 
        } 
    </style> 
</head> 
 
<body> 
 
<div class="container"> 
 
    <div class="card"> 
 
        <h1>➕ Tambah Produk 💕</h1> 
 
        @if ($errors->any()) 
            <div class="error"> 
                <strong>Ada kesalahan:</strong> 
 
                <ul> 
                    @foreach ($errors->all() as $error) 
                        <li>{{ $error }}</li> 
                    @endforeach 
                </ul> 
            </div> 
        @endif 
 
        <form 
            action="{{ route('produk.store') }}" 
            method="POST"
            enctype="multipart/form-data"
        > 
 
            @csrf 
 
            <div class="form-group"> 
                <label>Nama Produk</label> 
 
                <input 
                    type="text" 
                    name="name" 
                    value="{{ old('name') }}" 
                    placeholder="Contoh: Boneka Beruang" 
                    required 
                > 
            </div> 
 
            <div class="form-group"> 
                <label>Kategori</label> 
 
                <input 
                    type="text" 
                    name="category" 
                    value="{{ old('category') }}" 
                    placeholder="Contoh: Boneka" 
                    required 
                > 
            </div> 
 
            <div class="form-group"> 
                <label>Harga</label> 
 
                <input 
                    type="number" 
                    name="price" 
                    value="{{ old('price') }}" 
                    placeholder="Contoh: 50000" 
                    required 
                > 
            </div> 
 
            <div class="form-group"> 
                <label>Harga Lama</label> 
 
                <input 
                    type="number" 
                    name="old_price" 
                    value="{{ old('old_price') }}" 
                    placeholder="Contoh: 75000" 
                > 
            </div> 
 
            <div class="form-group"> 
                <label>Rating</label> 
 
                <select name="rating" required> 
                    <option value="5">⭐⭐⭐⭐⭐</option> 
                    <option value="4">⭐⭐⭐⭐</option> 
                    <option value="3">⭐⭐⭐</option> 
                    <option value="2">⭐⭐</option> 
                    <option value="1">⭐</option> 
                </select> 
            </div> 
 
            <div class="form-group"> 
                <label>Emoji Produk</label> 
 
                <input 
                    type="text" 
                    name="emoji" 
                    value="{{ old('emoji', '🧸') }}" 
                    placeholder="🧸" 
                    required 
                > 
            </div>

            <div class="form-group">
                <label>Gambar Produk 🖼️</label>

                <input
                    type="file"
                    name="image"
                    accept="image/*"
                >
            </div>
 
            <div class="buttons"> 
 
                <a 
                    href="{{ route('produk.index') }}" 
                    class="back" 
                > 
                    ← Kembali 
                </a> 
 
                <button type="submit"> 
                    💾 Simpan Produk 
                </button> 
 
            </div> 
 
        </form> 
 
    </div> 
 
</div> 
 
</body> 
</html>