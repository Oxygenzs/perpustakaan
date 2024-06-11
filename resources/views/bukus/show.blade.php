<!-- resources/views/bukus/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Buku</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $buku->judul }}</h5>
                <p class="card-text">{{ $buku->deskripsi }}</p>
                <p class="card-text">Penulis: {{ $buku->penulis->nama }}</p>
                <p class="card-text">Penerbit: {{ $buku->penerbit->nama }}</p>
                @if ($buku->file_ebook)
                    <p><a href="{{ asset('storage/' . $buku->file_ebook) }}" class="btn btn-success">Download E-Book</a></p>
                @endif
                <a href="{{ route('bukus.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection
