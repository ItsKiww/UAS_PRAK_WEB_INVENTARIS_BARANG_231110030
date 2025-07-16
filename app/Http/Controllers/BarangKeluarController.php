<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang_keluar;
use App\Models\barang;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangKeluar = barang_keluar::with('barang')->get();
        return view('inventaris.barangkeluar.index', compact('barangKeluar'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = barang::all();
        return view('inventaris.barangkeluar.create', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_barang' => 'required|exists:barang,id_barang',
            'tanggal_keluar' => 'required|date',
            'jumlah' => 'required|integer|min:1',
            'tujuan' => 'required|string|max:255'
        ]);

        barang_keluar::create($request->all());
        return redirect()->route('barang-keluar.index')->with('success', 'Data barang keluar berhasil ditambahkan.');
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
        $barangKeluar = barang_keluar::findOrFail($id);
        $barang = barang::all();
        return view('inventaris.barangkeluar.edit', compact('barangKeluar', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_barang' => 'required|exists:barang,id_barang',
            'tanggal_keluar' => 'required|date',
            'jumlah' => 'required|integer|min:1',
            'tujuan' => 'required|string|max:255'
        ]);

        $barangKeluar = barang_keluar::findOrFail($id);
        $barangKeluar->update($request->all());

        return redirect()->route('barang-keluar.index')->with('success', 'Data barang keluar berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        barang_keluar::destroy($id);
        return redirect()->route('barang-keluar.index')->with('success', 'Data barang keluar berhasil dihapus.');
    }
}
