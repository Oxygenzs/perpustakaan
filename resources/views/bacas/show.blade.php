<!-- resources/views/bacas/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Baca Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $baca->buku->judul }}</h5>
                <p class="card-text">User: {{ $baca->user->name }}</p>
                <p class="card-text">Tanggal: {{ $baca->tanggal }}</p>
                <p class="card-text">Waktu Baca Terakhir: {{ $baca->waktu_baca_terakhir }}</p>
                <a href="{{ route('bacas.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection
