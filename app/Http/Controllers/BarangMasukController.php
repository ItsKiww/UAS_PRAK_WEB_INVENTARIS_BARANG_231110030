<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang_masuk;
use App\Models\barang;
use App\Models\pemasok;

class BarangMasukController extends Controller
{
    public function index()
    {
        $barangMasuk = barang_masuk::with(['barang', 'pemasok'])->get();
        return view('inventaris.barangmasuk.index', compact('barangMasuk'));
    }

    public function create()
    {
        $barang = barang::all();
        $pemasok = pemasok::all();
        return view('inventaris.barangmasuk.create', compact('barang', 'pemasok'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_barang' => 'required|exists:barang,id_barang',
            'id_pemasok' => 'required|exists:pemasok,id_pemasok',
            'tanggal_masuk' => 'required|date',
            'jumlah' => 'required|integer|min:1',
            'harga_beli' => 'required|numeric|min:0',
        ]);

        barang_masuk::create($request->all());
        return redirect()->route('barang-masuk.index')->with('success', 'Data barang masuk berhasil ditambahkan.');
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
        $barangMasuk = barang_masuk::findOrFail($id);
        $barang = barang::all();
        $pemasok = pemasok::all();
        return view('inventaris.barangmasuk.edit', compact('barangMasuk', 'barang', 'pemasok'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_barang' => 'required|exists:barang,id_barang',
            'id_pemasok' => 'required|exists:pemasok,id_pemasok',
            'tanggal_masuk' => 'required|date',
            'jumlah' => 'required|integer|min:1',
            'harga_beli' => 'required|numeric|min:0',
        ]);

        $barangMasuk = barang_masuk::findOrFail($id);
        $barangMasuk->update($request->all());

        return redirect()->route('barang-masuk.index')->with('success', 'Data barang masuk berhasil diperbarui.');
    }

    public function destroy($id)
    {
        barang_masuk::destroy($id);
        return redirect()->route('barang-masuk.index')->with('success', 'Data barang masuk berhasil dihapus.');
    }
}
