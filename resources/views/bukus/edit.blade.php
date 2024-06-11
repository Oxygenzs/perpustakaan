<!-- resources/views/bukus/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Buku</h1>
        <form action="{{ route('bukus.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $buku->judul }}" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required>{{ $buku->deskripsi }}</textarea>
            </div>
            <div class="form-group">
                <label for="penulis_id">Penulis:</label>
                <select class="form-control" id="penulis_id" name="penulis_id" required>
                    @foreach ($penulis as $penulis)
                        <option value="{{ $penulis->id }}" {{ $penulis->id == $buku->penulis_id ? 'selected' : '' }}>{{ $penulis->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="penerbit_id">Penerbit:</label>
                <select class="form-control" id="penerbit_id" name="penerbit_id" required>
                    @foreach ($penerbits as $penerbit)
                        <option value="{{ $penerbit->id }}" {{ $penerbit->id == $buku->penerbit_id ? 'selected' : '' }}>{{ $penerbit->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="file_ebook">File E-Book (PDF):</label>
                <input type="file" class="form-control-file" id="file_ebook" name="file_ebook">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
