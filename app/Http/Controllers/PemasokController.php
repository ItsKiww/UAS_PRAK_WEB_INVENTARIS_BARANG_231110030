<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemasok;

class PemasokController extends Controller
{
    public function index()
    {
        $pemasok = pemasok::all();
        return view('inventaris.pemasok.index', compact('pemasok'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventaris.pemasok.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemasok' => 'required|string|max:255',
            'alamat' => 'required|string',
            'telepon' => 'required|string|max:20'
        ]);

        pemasok::create($request->all());
        return redirect()->route('pemasok.index')->with('success', 'Data pemasok berhasil ditambahkan.');
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
        $pemasok = pemasok::findOrFail($id);
        return view('inventaris.pemasok.edit', compact('pemasok'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pemasok' => 'required|string|max:255',
            'alamat' => 'required|string',
            'telepon' => 'required|string|max:20'
        ]);

        $pemasok = pemasok::findOrFail($id);
        $pemasok->update($request->all());

        return redirect()->route('pemasok.index')->with('success', 'Data pemasok berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        pemasok::destroy($id);
        return redirect()->route('pemasok.index')->with('success', 'Data pemasok berhasil dihapus.');
    }
}
