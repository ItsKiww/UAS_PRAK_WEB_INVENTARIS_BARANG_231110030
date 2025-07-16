@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <h2 class="page-title">
            <i class="fas fa-plus"></i> Tambah Barang
        </h2>
        <p class="page-subtitle">Tambahkan produk baru ke dalam inventori</p>
    </div>

    <div class="card">
        <div class="card-header">
            <i class="fas fa-plus-circle"></i> Form Tambah Barang
        </div>
        <div class="card-body">
            <form action="{{ route('barang.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Kategori</label>
                    <select name="id_kategori" class="form-select" required>
                        <option value="">-- Pilih Kategori --</option>
                        @foreach($kategori as $k)
                            <option value="{{ $k->kategori_barang->id_kategori }}">{{ $k->kategori_barang->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Stok</label>
                    <input type="number" name="stok" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Satuan</label>
                    <input type="text" name="satuan" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control" required>
                </div>
                <button class="btn btn-success">
                    <i class="fas fa-save"></i> Simpan
                </button>
                <a href="{{ route('barang.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </form>
        </div>
    </div>
</div>
@endsection