<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Wilayah</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Wilayah</h1>
        <form action="{{ route('update', $wilayah->id) }}" method="POST">
            @csrf
            @method('POST')
            
            <div class="mb-3">
                <label for="nama_wilayah" class="form-label">Nama Wilayah:</label>
                <input type="text" class="form-control" id="nama_wilayah" name="nama_wilayah" 
                    value="{{ old('nama_wilayah', $wilayah->nama_wilayah) }}" required>
            </div>

            <div class="mb-3">
                <label for="kode_pos" class="form-label">Kode Pos (5 Angka):</label>
                <input 
                    type="number" 
                    class="form-control" 
                    id="kode_pos" 
                    name="kode_pos" 
                    value="{{ old('kode_pos', $wilayah->kode_pos) }}"
                    pattern="[0-9]{5}"
                    minlength="5"
                    maxlength="5"
                    title="Kode pos harus 5 digit angka"
                    required
                >
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan:</label>
                <textarea class="form-control" id="keterangan" name="keterangan" rows="3">{{ old('keterangan', $wilayah->keterangan) }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>