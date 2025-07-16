@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Kategori Barang</h2>

    <form action="{{ route('kategori-barang.update', $kategori->id_kategori) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama Kategori</label>
            <input type="text" name="nama_kategori" value="{{ $kategori->nama_kategori }}" class="form-control" required>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('kategori-barang.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
