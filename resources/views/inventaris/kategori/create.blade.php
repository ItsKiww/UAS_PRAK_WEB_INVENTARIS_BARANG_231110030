@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Kategori Barang</h2>

    <form action="{{ route('kategori-barang.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Kategori</label>
            <input type="text" name="nama_kategori" class="form-control" required>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('kategori-barang.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
