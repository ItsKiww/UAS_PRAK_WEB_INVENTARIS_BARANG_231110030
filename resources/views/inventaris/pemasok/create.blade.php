@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Pemasok</h2>

    <form action="{{ route('pemasok.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Pemasok</label>
            <input type="text" name="nama_pemasok" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label>Telepon</label>
            <input type="text" name="telepon" class="form-control" required>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('pemasok.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
