@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Data Barang Masuk</h2>

    <a href="{{ route('barang-masuk.create') }}" class="btn btn-primary mb-3">+ Tambah Barang Masuk</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Pemasok</th>
                <th>Tanggal Masuk</th>
                <th>Jumlah</th>
                <th>Harga Beli</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barangMasuk as $bm)
            <tr>
                <td>{{ $bm->id_masuk }}</td>
                <td>{{ $bm->barang->nama_barang ?? '-' }}</td>
                <td>{{ $bm->pemasok->nama_pemasok ?? '-' }}</td>
                <td>{{ $bm->tanggal_masuk }}</td>
                <td>{{ $bm->jumlah }}</td>
                <td>Rp {{ number_format($bm->harga_beli, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('barang-masuk.edit', $bm->id_masuk) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('barang-masuk.destroy', $bm->id_masuk) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
