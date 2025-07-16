@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <h2 class="page-title">
            <i class="fas fa-edit"></i> Edit Barang
        </h2>
        <p class="page-subtitle">Perbarui informasi produk yang sudah ada</p>
    </div>

    <div class="card">
        <div class="card-header">
            <i class="fas fa-edit"></i> Form Edit Barang
        </div>
        <div class="card-body">
            <form action="{{ route('barang.update', $barang->id_barang) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Kategori</label>
                    <select name="id_kategori" class="form-select" required>
                        @foreach($kategori as $k)
                            <option value="{{ $k->id_kategori }}" {{ $barang->id_kategori == $k->id_kategori ? 'selected' : '' }}>
                                {{ $k->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Stok</label>
                    <input type="number" name="stok" value="{{ $barang->stok }}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Satuan</label>
                    <input type="text" name="satuan" value="{{ $barang->satuan }}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Harga</label>
                    <input type="number" name="harga" value="{{ $barang->harga }}" class="form-control" required>
                </div>
                <button class="btn btn-primary">
                    <i class="fas fa-save"></i> Update
                </button>
                <a href="{{ route('barang.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </form>
        </div>
    </div>
</div>
@endsection