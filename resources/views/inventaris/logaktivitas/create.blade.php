@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Log Aktivitas</h2>

    <form action="{{ route('log-aktivitas.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Pengguna</label>
            <select name="id_pengguna" class="form-select" required>
                <option value="">-- Pilih Pengguna --</option>
                @foreach($pengguna as $p)
                    <option value="{{ $p->id_pengguna }}">{{ $p->username }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Aktivitas</label>
            <input type="text" name="aktivitas" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Waktu</label>
            <input type="datetime-local" name="timestamp" class="form-control" required>
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('log-aktivitas.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
