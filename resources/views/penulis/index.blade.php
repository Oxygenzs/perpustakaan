<!-- resources/views/penulis/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Penulis</h1>
        <a href="{{ route('penulis.create') }}" class="btn btn-primary">Tambah Penulis</a>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penulis as $penulis)
                    <tr>
                        <td>{{ $penulis->id }}</td>
                        <td>{{ $penulis->nama }}</td>
                        <td>
                            <a href="{{ route('penulis.show', $penulis->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('penulis.edit', $penulis->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('penulis.destroy', $penulis->id) }}" method="POST" style="display:inline-block;">
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
