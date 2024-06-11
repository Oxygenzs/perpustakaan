<!-- resources/views/levels/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Level Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $level->name }}</h5>
                <a href="{{ route('levels.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection
