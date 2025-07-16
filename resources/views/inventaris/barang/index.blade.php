<!-- ===== 1. INDEX.BLADE.PHP ===== -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <h2 class="page-title">
            <i class="fas fa-box"></i> Manajemen Barang
        </h2>
        <p class="page-subtitle">Kelola inventori barang dengan sistem yang profesional</p>
    </div>

    <div class="card">
        <div class="card-header">
            <i class="fas fa-list"></i> Daftar Barang
        </div>
        <div class="card-body">
            <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i> Tambah Barang
            </a>

            @if(session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i> {{ session('success') }}
                </div>
            @endif

            <div class="table-container">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th>Satuan</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($barang as $b)
                        <tr>
                            <td>{{ $b->id_barang }}</td>
                            <td>{{ $b->nama_barang }}</td>
                            <td>{{ $b->kategori->nama_kategori ?? '-' }}</td>
                            <td>{{ $b->stok }}</td>
                            <td>{{ $b->satuan }}</td>
                            <td>Rp {{ number_format($b->harga, 0, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('barang.edit', $b->id_barang) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('barang.destroy', $b->id_barang) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus barang ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection