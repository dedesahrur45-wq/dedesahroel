<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruangan;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ruangan.index',  [
            'title' => 'Ruangan',
            'items' => Ruangan::all()
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ruangan.input');  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ruangan = $request->all();
        Ruangan::create($ruangan);
        return redirect()->route('ruangan.index')->with('success', 'Data Berhasil Disimpan');
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
        return view('ruangan.edit', [
            'item' => Ruangan::findOrfail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ruangan = $request->all();
        $item = Ruangan::findOrfail($id);
        $item->update($ruangan);
        return redirect()->route('ruangan.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Ruangan::findOrfail($id);
        $item->delete();
        return redirect()->route('ruangan.index')->with('success', 'Data Berhasil Dihapus');
    }
}
