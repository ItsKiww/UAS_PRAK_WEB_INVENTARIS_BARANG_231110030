@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center mb-4">Manajemen Pengguna</h2>

    <a href="{{ route('pengguna.create') }}" class="btn btn-primary mb-3">+ Tambah Pengguna</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Level</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengguna as $item)
            <tr>
                <td>{{ $item->id_pengguna }}</td>
                <td>{{ $item->username }}</td>
                <td>{{ $item->level }}</td>
                <td>
                    <a href="{{ route('pengguna.edit', $item->id_pengguna) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('pengguna.destroy', $item->id_pengguna) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
