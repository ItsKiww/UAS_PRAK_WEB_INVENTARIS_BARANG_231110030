@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Log Aktivitas Pengguna</h2>

    <a href="{{ route('log-aktivitas.create') }}" class="btn btn-primary mb-3">+ Tambah Log Manual</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Aktivitas</th>
                <th>Waktu</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($logs as $log)
            <tr>
                <td>{{ $log->id_log }}</td>
                <td>{{ $log->pengguna->username ?? '-' }}</td>
                <td>{{ $log->aktivitas }}</td>
                <td>{{ $log->timestamp }}</td>
                <td>
                    <a href="{{ route('log-aktivitas.edit', $log->id_log) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('log-aktivitas.destroy', $log->id_log) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus log ini?')">
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
