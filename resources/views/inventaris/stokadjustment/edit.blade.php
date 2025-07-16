@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Penyesuaian Stok</h2>

    <form action="{{ route('stok-adjustment.update', $adjustment->id_adjust) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Barang</label>
            <select name="id_barang" class="form-select" required>
                @foreach($barang as $b)
                    <option value="{{ $b->id_barang }}" {{ $adjustment->id_barang == $b->id_barang ? 'selected' : '' }}>
                        {{ $b->nama_barang }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" value="{{ $adjustment->tanggal }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Perubahan Stok</label>
            <input type="number" name="perubahan_stok" value="{{ $adjustment->perubahan_stok }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Alasan</label>
            <input type="text" name="alasan" value="{{ $adjustment->alasan }}" class="form-control" required>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('stok-adjustment.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
