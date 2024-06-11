<?php

// app/Http/Controllers/BacaController.php
namespace App\Http\Controllers;

use App\Models\Baca;
use App\Models\Buku;
use App\Models\User;
use Illuminate\Http\Request;

class BacaController extends Controller
{
    public function index()
    {
        $bacas = Baca::all();
        return view('bacas.index', compact('bacas'));
    }

    public function create()
    {
        $users = User::all();
        $bukus = Buku::all();
        return view('bacas.create', compact('users', 'bukus'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'buku_id' => 'required|exists:bukus,id',
            'user_id' => 'required|exists:users,id',
            'tanggal' => 'required|date',
            'waktu_baca_terakhir' => 'required',
        ]);

        // Simpan data baca ke dalam database
        Baca::create($validatedData);

        // Redirect dengan pesan sukses
        return redirect()->route('bacas.index')->with('success', 'Data baca berhasil disimpan.');
    }

    public function show(Baca $baca)
    {
        return view('bacas.show', compact('baca'));
    }

    public function edit(Baca $baca)
    {
        $users = User::all();
        $bukus = Buku::all();
        return view('bacas.edit', compact('baca', 'users', 'bukus'));
    }

    public function update(Request $request, Baca $baca)
    {
        $request->validate([
            'user_id' => 'required',
            'buku_id' => 'required',
            'tanggal' => 'required|date',
            'waktu_baca_terakhir' => 'nullable|date_format:H:i:s',
        ]);

        $baca->update($request->all());

        return redirect()->route('bacas.index')
                        ->with('success', 'Baca updated successfully.');
    }

    public function destroy(Baca $baca)
    {
        $baca->delete();

        return redirect()->route('bacas.index')
                        ->with('success', 'Baca deleted successfully.');
    }
}