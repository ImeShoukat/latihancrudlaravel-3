<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Wilayah</title>
</head>
<body>
    <h1>Tambah Wilayah</h1>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <label for="nama_wilayah">Nama Wilayah:</label>
        <input type="text" id="nama_wilayah" name="nama_wilayah" required><br><br>

        <label for="kode_pos">Kode Pos:</label>
        <input type="text" id="kode_pos" name="kode_pos" required><br><br>

        <label for="keterangan">Keterangan:</label>
        <textarea id="keterangan" name="keterangan"></textarea><br><br>
        
        <button type="submit">Simpan</button>
    </form>
    <br>
    <a href="{{ route('index') }}">Kembali ke Daftar Wilayah</a>
</body>
</html>