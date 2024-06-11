<!-- resources/views/penulis/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Penulis Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $penulis->nama }}</h5>
                <a href="{{ route('penulis.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection
