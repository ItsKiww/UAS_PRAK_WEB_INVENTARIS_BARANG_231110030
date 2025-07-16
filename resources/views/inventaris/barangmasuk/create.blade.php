@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Barang Masuk</h2>

    <form action="{{ route('barang-masuk.store') }}" method="POST">
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
            <label>Pemasok</label>
            <select name="id_pemasok" class="form-select" required>
                <option value="">-- Pilih Pemasok --</option>
                @foreach($pemasok as $p)
                    <option value="{{ $p->id_pemasok }}">{{ $p->nama_pemasok }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Tanggal Masuk</label>
            <input type="date" name="tanggal_masuk" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Harga Beli</label>
            <input type="number" name="harga_beli" class="form-control" required>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('barang-masuk.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
