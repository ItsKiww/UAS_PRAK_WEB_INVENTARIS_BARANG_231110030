@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Barang Masuk</h2>

    <form action="{{ route('barang-masuk.update', $barangMasuk->id_masuk) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Barang</label>
            <select name="id_barang" class="form-select" required>
                @foreach($barang as $b)
                    <option value="{{ $b->id_barang }}" {{ $barangMasuk->id_barang == $b->id_barang ? 'selected' : '' }}>
                        {{ $b->nama_barang }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Pemasok</label>
            <select name="id_pemasok" class="form-select" required>
                @foreach($pemasok as $p)
                    <option value="{{ $p->id_pemasok }}" {{ $barangMasuk->id_pemasok == $p->id_pemasok ? 'selected' : '' }}>
                        {{ $p->nama_pemasok }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Tanggal Masuk</label>
            <input type="date" name="tanggal_masuk" value="{{ $barangMasuk->tanggal_masuk }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="jumlah" value="{{ $barangMasuk->jumlah }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Harga Beli</label>
            <input type="number" name="harga_beli" value="{{ $barangMasuk->harga_beli }}" class="form-control" required>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('barang-masuk.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
