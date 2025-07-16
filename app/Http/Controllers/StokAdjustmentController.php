<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stok_adjustment;
use App\Models\barang;

class StokAdjustmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adjustments = stok_adjustment::with('barang')->get();
        return view('inventaris.stokadjustment.index', compact('adjustments'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = barang::all();
        return view('inventaris.stokadjustment.create', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_barang' => 'required|exists:barang,id_barang',
            'tanggal' => 'required|date',
            'perubahan_stok' => 'required|integer',
            'alasan' => 'required|string|max:255',
        ]);

        stok_adjustment::create($request->all());

        return redirect()->route('stok-adjustment.index')->with('success', 'Penyesuaian stok berhasil ditambahkan.');
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
        $adjustment = stok_adjustment::findOrFail($id);
        $barang = barang::all();
        return view('inventaris.stokadjustment.edit', compact('adjustment', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_barang' => 'required|exists:barang,id_barang',
            'tanggal' => 'required|date',
            'perubahan_stok' => 'required|integer',
            'alasan' => 'required|string|max:255',
        ]);

        $adjustment = stok_adjustment::findOrFail($id);
        $adjustment->update($request->all());

        return redirect()->route('stok-adjustment.index')->with('success', 'Penyesuaian stok berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        stok_adjustment::destroy($id);
        return redirect()->route('stok-adjustment.index')->with('success', 'Penyesuaian stok berhasil dihapus.');
    }
}
