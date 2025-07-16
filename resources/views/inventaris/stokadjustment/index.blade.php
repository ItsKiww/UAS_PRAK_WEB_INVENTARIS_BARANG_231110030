@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Data Penyesuaian Stok</h2>

    <a href="{{ route('stok-adjustment.create') }}" class="btn btn-primary mb-3">+ Tambah Penyesuaian</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Barang</th>
                <th>Tanggal</th>
                <th>Perubahan Stok</th>
                <th>Alasan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($adjustments as $a)
            <tr>
                <td>{{ $a->id_adjust }}</td>
                <td>{{ $a->barang->nama_barang ?? '-' }}</td>
                <td>{{ $a->tanggal }}</td>
                <td>{{ $a->perubahan_stok }}</td>
                <td>{{ $a->alasan }}</td>
                <td>
                    <a href="{{ route('stok-adjustment.edit', $a->id_adjust) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('stok-adjustment.destroy', $a->id_adjust) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
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
