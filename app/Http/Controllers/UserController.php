<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // No auth middleware: allow public create/edit/delete as requested
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.index',  [
            'title' => 'User',
            'items' => User::all()
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.input');  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = $request->all();
        User::create($user);
        return redirect()->route('user.index')->with('success', 'Data Berhasil Disimpan');
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
        return view('user.edit', [
            'item' => User::findOrfail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = $request->all();
        $item = User::findOrfail($id);
        $item->update($user);
        return redirect()->route('user.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = User::findOrfail($id);
        $item->delete();
        return redirect()->route('user.index')->with('success', 'Data Berhasil Dihapus');
    }
}
