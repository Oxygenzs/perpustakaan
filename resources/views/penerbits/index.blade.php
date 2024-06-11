<!-- resources/views/penerbits/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Penerbit</h1>
        <a href="{{ route('penerbits.create') }}" class="btn btn-primary">Tambah Penerbit</a>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penerbits as $penerbit)
                    <tr>
                        <td>{{ $penerbit->id }}</td>
                        <td>{{ $penerbit->nama }}</td>
                        <td>
                            <a href="{{ route('penerbits.show', $penerbit->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('penerbits.edit', $penerbit->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('penerbits.destroy', $penerbit->id) }}" method="POST" style="display:inline-block;">
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
