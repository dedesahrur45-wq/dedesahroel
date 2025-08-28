<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bangunan;

class BangunanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('bangunan.index',  [
            'title' => 'Bangunan',
            'items' => Bangunan::all()
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bangunan.input');  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bangunan = $request->all();
        Bangunan::create($bangunan);
        return redirect()->route('bangunan.index')->with('success', 'Data Berhasil Disimpan');
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
        return view('bangunan.edit', [
            'item' => Bangunan::findOrfail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bangunan = $request->all();
        $item = Bangunan::findOrfail($id);
        $item->update($bangunan);
        return redirect()->route('bangunan.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Bangunan::findOrfail($id);
        $item->delete();
        return redirect()->route('bangunan.index')->with('success', 'Data Berhasil Dihapus');
    }
}
