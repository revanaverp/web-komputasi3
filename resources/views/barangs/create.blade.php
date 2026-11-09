<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        h1 {
            margin-top: 0;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        .btn {
            margin-top: 20px;
            padding: 10px 15px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .back {
            display: inline-block;
            margin-top: 15px;
            color: #555;
            text-decoration: none;
        }

        .error {
            background: #fee2e2;
            color: #991b1b;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Tambah Barang</h1>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('barangs.store') }}" method="POST">

        @csrf

        <label>Nama Barang</label>
        <input type="text"
               name="nama_barang"
               value="{{ old('nama_barang') }}"
               required>

        <label>Kategori</label>
        <input type="text"
               name="kategori"
               value="{{ old('kategori') }}"
               required>

        <label>Harga</label>
        <input type="number"
               name="harga"
               value="{{ old('harga') }}"
               min="0"
               required>

        <label>Stok</label>
        <input type="number"
               name="stok"
               value="{{ old('stok') }}"
               min="0"
               required>

        <button type="submit" class="btn">
            Simpan Barang
        </button>

    </form>

    <a href="{{ route('barangs.index') }}" class="back">
        ← Kembali ke daftar barang
    </a>

</div>

</body>
</html>
