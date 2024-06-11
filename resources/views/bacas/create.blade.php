<!-- resources/views/bacas/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Baca</h1>
        <form action="{{ route('bacas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="judul">Judul Buku:</label>
                <select class="form-control" id="buku_id" name="buku_id" required>
                    @foreach ($bukus as $buku)
                        <option value="{{ $buku->id }}">{{ $buku->judul }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="user_id">User:</label>
                <select class="form-control" id="user_id" name="user_id" required>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
            </div>
            <div class="form-group">
                <label for="waktu_baca_terakhir">Waktu Baca Terakhir:</label>
                <input type="time" class="form-control" id="waktu_baca_terakhir" name="waktu_baca_terakhir" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
