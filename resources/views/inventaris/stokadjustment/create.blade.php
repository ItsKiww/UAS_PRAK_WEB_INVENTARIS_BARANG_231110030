@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Penyesuaian Stok</h2>

    <form action="{{ route('stok-adjustment.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Barang</label>
            <select name="id_barang" class="form-select" required>
                <option value="">-- Pilih Barang --</option>
                @foreach($barang as $b)
                    <option value="{{ $b->id_barang }}">{{ $b->nama_barang }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Perubahan Stok</label>
            <input type="number" name="perubahan_stok" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Alasan</label>
            <input type="text" name="alasan" class="form-control" required>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('stok-adjustment.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
