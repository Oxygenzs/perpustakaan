<?php

// app/Http/Controllers/PenulisController.php
namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    public function index()
    {
        $penulis = Penulis::all();
        return view('penulis.index', compact('penulis'));
    }

    public function create()
    {
        return view('penulis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        Penulis::create($request->only('nama'));

        return redirect()->route('penulis.index')->with('success', 'Penulis berhasil ditambahkan.');
    }

    public function show(Penulis $penulis)
    {
        return view('penulis.show', compact('penulis'));
    }

    public function edit(Penulis $penulis)
    {
        return view('penulis.edit', compact('penulis'));
    }

    public function update(Request $request, Penulis $penulis)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $penulis->update($request->only('nama'));

        return redirect()->route('penulis.index')->with('success', 'Penulis berhasil diupdate.');
    }

    public function destroy(Penulis $penulis)
    {
        $penulis->delete();

        return redirect()->route('penulis.index')
                        ->with('success', 'Penulis deleted successfully.');
    }
}
