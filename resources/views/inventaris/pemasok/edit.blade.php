@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Pemasok</h2>

    <form action="{{ route('pemasok.update', $pemasok->id_pemasok) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama Pemasok</label>
            <input type="text" name="nama_pemasok" value="{{ $pemasok->nama_pemasok }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" rows="3" required>{{ $pemasok->alamat }}</textarea>
        </div>
        <div class="mb-3">
            <label>Telepon</label>
            <input type="text" name="telepon" value="{{ $pemasok->telepon }}" class="form-control" required>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('pemasok.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
