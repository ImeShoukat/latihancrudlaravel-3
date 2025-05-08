<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Wilayah</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Tambah Wilayah</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_wilayah" class="form-label">Nama Wilayah:</label>
                                <input type="text" class="form-control" id="nama_wilayah" name="nama_wilayah" required>
                            </div>

                            <div class="mb-3">
                                <label for="kode_pos" class="form-label">Kode Pos (5 Angka):</label>
                                <input 
                                    type="number" 
                                    class="form-control" 
                                    id="kode_pos" 
                                    name="kode_pos" 
                                    pattern="[0-9]{5}"
                                    minlength="5"
                                    maxlength="5"
                                    title="Kode pos harus 5 digit angka"
                                    required
                                >
                            </div>

                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan:</label>
                                <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
                            </div>
                            
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('index') }}" class="btn btn-secondary">Kembali ke Daftar Wilayah</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>