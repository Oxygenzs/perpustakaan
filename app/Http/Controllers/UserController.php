<?php

// app/Http/Controllers/UserController.php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }


public function store(Request $request)
{
    // Validasi request

    // Buat instance baru dari model User
    $user = new User;

    // Isi atribut-atribut pengguna dari request
    $user->name = $request->name;
    $user->email = $request->email;
    
    // Setel password menggunakan hashing
    $user->password = Hash::make($request->password);

    // Simpan data pengguna ke dalam database
    $user->save();

    // Redirect atau kirim respons sukses
    return redirect('/users')->with('success', 'Penulis berhasil ditambahkan.');
}


    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            // Tambahkan validasi sesuai kebutuhan
        ]);

        $user->update($request->all());

        return redirect()->route('users.index')
                        ->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
                        ->with('success', 'User deleted successfully.');
    }
}
