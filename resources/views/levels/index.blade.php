<!-- resources/views/levels/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Levels</h1>
        <a href="{{ route('levels.create') }}" class="btn btn-primary">Tambah Level</a>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($levels as $level)
                    <tr>
                        <td>{{ $level->id }}</td>
                        <td>{{ $level->name }}</td>
                        <td>
                            <a href="{{ route('levels.show', $level->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('levels.edit', $level->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('levels.destroy', $level->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
