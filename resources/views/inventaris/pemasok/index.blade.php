@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Data Pemasok</h2>

    <a href="{{ route('pemasok.create') }}" class="btn btn-primary mb-3">+ Tambah Pemasok</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama Pemasok</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pemasok as $p)
            <tr>
                <td>{{ $p->id_pemasok }}</td>
                <td>{{ $p->nama_pemasok }}</td>
                <td>{{ $p->alamat }}</td>
                <td>{{ $p->telepon }}</td>
                <td>
                    <a href="{{ route('pemasok.edit', $p->id_pemasok) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('pemasok.destroy', $p->id_pemasok) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
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
