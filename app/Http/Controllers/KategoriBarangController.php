<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori_barang;

class KategoriBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = kategori_barang::all();
        return view('inventaris.kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventaris.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255'
        ]);

        kategori_barang::create($request->all());
        return redirect()->route('kategori-barang.index')->with('success', 'Kategori berhasil ditambahkan.');
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
        $kategori = kategori_barang::findOrFail($id);
        return view('inventaris.kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255'
        ]);

        $kategori = kategori_barang::findOrFail($id);
        $kategori->update($request->all());

        return redirect()->route('kategori-barang.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy($id)
    {
        kategori_barang::destroy($id);
        return redirect()->route('kategori-barang.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
