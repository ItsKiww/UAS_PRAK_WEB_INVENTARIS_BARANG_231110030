<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\log_aktivitas;
use App\Models\pengguna;

class LogAktivitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logs = log_aktivitas::with('pengguna')->get();
        return view('inventaris.logaktivitas.index', compact('logs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pengguna = pengguna::all();
        return view('inventaris.logaktivitas.create', compact('pengguna'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_pengguna' => 'required|exists:pengguna,id_pengguna',
            'aktivitas' => 'required|string|max:255',
            'timestamp' => 'required|date',
        ]);

        log_aktivitas::create($request->all());

        return redirect()->route('log-aktivitas.index')->with('success', 'Log aktivitas berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $log = log_aktivitas::findOrFail($id);
        $pengguna = pengguna::all();
        return view('inventaris.logaktivitas.edit', compact('log', 'pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_pengguna' => 'required|exists:pengguna,id_pengguna',
            'aktivitas' => 'required|string|max:255',
            'timestamp' => 'required|date',
        ]);

        $log = log_aktivitas::findOrFail($id);
        $log->update($request->all());

        return redirect()->route('log-aktivitas.index')->with('success', 'Log aktivitas berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        log_aktivitas::destroy($id);
        return redirect()->route('log-aktivitas.index')->with('success', 'Log aktivitas berhasil dihapus.');
    }
}
