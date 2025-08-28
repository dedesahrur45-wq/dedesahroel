<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('barang.index',  [
            'title' => 'Barang',
            'items' => Barang::all()
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.input');  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $barang = $request->all();
        Barang::create($barang);
        return redirect()->route('barang.index')->with('success', 'Data Berhasil Disimpan');
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
    public function edit(string $id)
    {
        return view('barang.edit', [
            'item' => Barang::findOrfail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $barang = $request->all();
        $item = Barang::findOrfail($id);
        $item->update($barang);
        return redirect()->route('barang.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Barang::findOrfail($id);
        $item->delete();
        return redirect()->route('barang.index')->with('success', 'Data Berhasil Dihapus');
    }
}
