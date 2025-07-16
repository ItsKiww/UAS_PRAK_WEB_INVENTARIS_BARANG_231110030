@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Barang Keluar</h2>

    <form action="{{ route('barang-keluar.update', $barangKeluar->id_keluar) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Barang</label>
            <select name="id_barang" class="form-select" required>
                @foreach($barang as $b)
                    <option value="{{ $b->id_barang }}" {{ $barangKeluar->id_barang == $b->id_barang ? 'selected' : '' }}>
                        {{ $b->nama_barang }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Tanggal Keluar</label>
            <input type="date" name="tanggal_keluar" value="{{ $barangKeluar->tanggal_keluar }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="jumlah" value="{{ $barangKeluar->jumlah }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Tujuan</label>
            <input type="text" name="tujuan" value="{{ $barangKeluar->tujuan }}" class="form-control" required>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('barang-keluar.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
