@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Data Barang Keluar</h2>

    <a href="{{ route('barang-keluar.create') }}" class="btn btn-primary mb-3">+ Tambah Barang Keluar</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Tanggal Keluar</th>
                <th>Jumlah</th>
                <th>Tujuan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barangKeluar as $bk)
            <tr>
                <td>{{ $bk->id_keluar }}</td>
                <td>{{ $bk->barang->nama_barang ?? '-' }}</td>
                <td>{{ $bk->tanggal_keluar }}</td>
                <td>{{ $bk->jumlah }}</td>
                <td>{{ $bk->tujuan }}</td>
                <td>
                    <a href="{{ route('barang-keluar.edit', $bk->id_keluar) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('barang-keluar.destroy', $bk->id_keluar) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus data ini?')">
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
