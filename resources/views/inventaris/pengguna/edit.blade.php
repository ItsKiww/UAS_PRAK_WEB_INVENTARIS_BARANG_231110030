@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Pengguna</h2>

    <form action="{{ route('pengguna.update', $pengguna->id_pengguna) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" value="{{ $pengguna->username }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="level" class="form-label">Level</label>
            <select name="level" class="form-select">
                <option value="admin" {{ $pengguna->level == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="staff" {{ $pengguna->level == 'staff' ? 'selected' : '' }}>Staff</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('pengguna.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
