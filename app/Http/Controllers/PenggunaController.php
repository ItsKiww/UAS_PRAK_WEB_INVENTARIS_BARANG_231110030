<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengguna;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengguna = Pengguna::all();
        return view('inventaris.pengguna.index', compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventaris.pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'level' => 'required|in:admin,staff'
        ]);

        Pengguna::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'level' => $request->level
        ]);

        return redirect()->route('pengguna.index')->with('success', 'Pengguna berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('inventaris.pengguna.edit', compact('pengguna'));
    }
    
    public function update(Request $request, $id)
    {
        $pengguna = Pengguna::findOrFail($id);
        $pengguna->update($request->only(['username', 'level']));
        return redirect()->route('pengguna.index')->with('success', 'Data pengguna berhasil diperbarui');
    }
    
    public function destroy($id)
    {
        Pengguna::destroy($id);
        return redirect()->route('pengguna.index')->with('success', 'Pengguna berhasil dihapus');
    }
}
