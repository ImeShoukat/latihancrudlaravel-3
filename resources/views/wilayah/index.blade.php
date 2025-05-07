@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Wilayah</h2>

        <!-- Tampilkan pesan sukses jika ada -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tombol untuk menambahkan wilayah baru -->
        <a href="{{ route('wilayah.create') }}" class="btn btn-primary">Tambah Wilayah</a>

        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Nama Wilayah</th>
                    <th>Kode Pos</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{ $item->nama_wilayah }}</td>
                        <td>{{ $item->kode_pos }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td>
                            <!-- Tombol Edit dan Hapus -->
                            <a href="{{ route('wilayah.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('wilayah.destroy', $item->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
