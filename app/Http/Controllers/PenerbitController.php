<?php

// app/Http/Controllers/PenerbitController.php
namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    public function index()
    {
        $penerbits = Penerbit::all();
        return view('penerbits.index', compact('penerbits'));
    }

    public function create()
    {
        return view('penerbits.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        Penerbit::create($request->only('nama'));

        return redirect()->route('penerbits.index')->with('success', 'Penerbit berhasil ditambahkan.');
    }

    public function show(Penerbit $penerbit)
    {
        return view('penerbits.show', compact('penerbit'));
    }

    public function edit(Penerbit $penerbit)
    {
        return view('penerbits.edit', compact('penerbit'));
    }

    public function update(Request $request, Penerbit $penerbit)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $penerbit->update($request->only('nama'));

        return redirect()->route('penerbits.index')->with('success', 'Penerbit berhasil diupdate.');
    }

    public function destroy(Penerbit $penerbit)
    {
        $penerbit->delete();

        return redirect()->route('penerbits.index')
                        ->with('success', 'Penerbit deleted successfully.');
    }
}