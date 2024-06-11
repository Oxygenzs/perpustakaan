<?php

// app/Http/Controllers/BukuController.php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Models\Buku;
use App\Models\Penulis;
use App\Models\Penerbit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        return view('bukus.index', compact('bukus'));
    }

    public function create()
    {
        $penulis = Penulis::all();
        $penerbits = Penerbit::all();
        return view('bukus.create', compact('penulis', 'penerbits'));
    }


public function store(Request $request)
{
    Log::info('Store method called');

    $request->validate([
        'judul' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'penulis_id' => 'required|exists:penulis,id',
        'penerbit_id' => 'required|exists:penerbits,id',
        'file_ebook' => 'nullable|file|mimes:pdf|max:2048'
    ]);

    Log::info('Validation passed');

    $buku = new Buku();
    $buku->judul = $request->judul;
    $buku->deskripsi = $request->deskripsi;
    $buku->penulis_id = $request->penulis_id;
    $buku->penerbit_id = $request->penerbit_id;

    if ($request->hasFile('file_ebook')) {
        $file = $request->file('file_ebook');
        $filePath = $file->store('ebooks', 'public');
        $buku->file_ebook = $filePath;
    }

    Log::info('Saving buku', ['buku' => $buku]);

    $buku->save();

    Log::info('Buku saved successfully');

    return redirect()->route('bukus.index')->with('success', 'Buku berhasil ditambahkan');
}


    public function show(Buku $buku)
    {
        return view('bukus.show', compact('buku'));
    }

    public function edit(Buku $buku)
    {
        $penulis = Penulis::all();
        $penerbits = Penerbit::all();
        return view('bukus.edit', compact('buku', 'penulis', 'penerbits'));
    }

    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'penulis_id' => 'required',
            'penerbit_id' => 'required',
            'file_ebook' => 'nullable|file|mimes:pdf',
        ]);

        $path = $request->file('file_ebook') ? $request->file('file_ebook')->store('ebooks') : $buku->file_ebook;

        $buku->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'penulis_id' => $request->penulis_id,
            'penerbit_id' => $request->penerbit_id,
            'file_ebook' => $path,
        ]);

        return redirect()->route('bukus.index')
                        ->with('success', 'Buku updated successfully.');
    }

    public function destroy(Buku $buku)
    {
        if ($buku->file_ebook) {
            Storage::delete($buku->file_ebook);
        }

        $buku->delete();

        return redirect()->route('bukus.index')
                        ->with('success', 'Buku deleted successfully.');
    }
}

