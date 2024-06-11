<!-- resources/views/bukus/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Buku</h1>
        <form action="{{ route('bukus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="penulis_id">Penulis:</label>
                <select class="form-control" id="penulis_id" name="penulis_id" required>
                    @foreach ($penulis as $penulis)
                        <option value="{{ $penulis->id }}">{{ $penulis->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="penerbit_id">Penerbit:</label>
                <select class="form-control" id="penerbit_id" name="penerbit_id" required>
                    @foreach ($penerbits as $penerbit)
                        <option value="{{ $penerbit->id }}">{{ $penerbit->nama }}</option>
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
