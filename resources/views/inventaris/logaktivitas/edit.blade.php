@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Log Aktivitas</h2>

    <form action="{{ route('log-aktivitas.update', $log->id_log) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Pengguna</label>
            <select name="id_pengguna" class="form-select" required>
                @foreach($pengguna as $p)
                    <option value="{{ $p->id_pengguna }}" {{ $log->id_pengguna == $p->id_pengguna ? 'selected' : '' }}>
                        {{ $p->username }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Aktivitas</label>
            <input type="text" name="aktivitas" value="{{ $log->aktivitas }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Waktu</label>
            <input type="datetime-local" name="timestamp" value="{{ \Carbon\Carbon::parse($log->timestamp)->format('Y-m-d\TH:i') }}" class="form-control" required>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('log-aktivitas.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
