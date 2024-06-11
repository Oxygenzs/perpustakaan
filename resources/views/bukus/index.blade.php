<!-- resources/views/bukus/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Buku</h1>
        <a href="{{ route('bukus.create') }}" class="btn btn-primary">Tambah Buku</a>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bukus as $buku)
                    <tr>
                        <td>{{ $buku->id }}</td>
                        <td>{{ $buku->judul }}</td>
                        <td>{{ $buku->deskripsi }}</td>
                        <td>{{ $buku->penulis->name }}</td>
                        <td>{{ $buku->penerbit->name }}</td>
                        <td>
                            <a href="{{ route('bukus.show', $buku->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('bukus.edit', $buku->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('bukus.destroy', $buku->id) }}" method="POST" style="display:inline-block;">
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
