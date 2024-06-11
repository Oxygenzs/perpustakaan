<!-- resources/views/penerbits/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Penerbit Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $penerbit->nama }}</h5>
                <a href="{{ route('penerbits.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection
