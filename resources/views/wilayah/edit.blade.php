@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Wilayah</h2>

        <form action="{{ route('wilayah.update', $wilayah->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama_wilayah" class="form-label">Nama Wilayah</label>
                <input type="text" class="form-control" id="nama_wilayah" name="nama_wilayah" value="{{ $wilayah->nama_wilayah }}" required>
            </div>

            <div class="mb-3">
                <label for="kode_pos" class="form-label">Kode Pos</label>
                <input type="text" class="form-control" id="kode_pos" name="kode_pos" value="{{ $wilayah->kode_pos }}" required>
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea class="form-control" id="keterangan" name="keterangan">{{ $wilayah->keterangan }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
