@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Manajemen Kategori Barang</h2>

    <a href="{{ route('kategori-barang.create') }}" class="btn btn-primary mb-3">+ Tambah Kategori</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kategori as $k)
            <tr>
                <td>{{ $k->id_kategori }}</td>
                <td>{{ $k->nama_kategori }}</td>
                <td>
                    <a href="{{ route('kategori-barang.edit', $k->id_kategori) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('kategori-barang.destroy', $k->id_kategori) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus kategori ini?')">
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
