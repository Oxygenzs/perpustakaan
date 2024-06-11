<!-- resources/views/bacas/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Baca</h1>
        <a href="{{ route('bacas.create') }}" class="btn btn-primary">Tambah Baca</a>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul Buku</th>
                    <th>User</th>
                    <th>Tanggal</th>
                    <th>Waktu Baca Terakhir</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bacas as $baca)
                    <tr>
                        <td>{{ $baca->id }}</td>
                        <td>{{ $baca->buku->judul }}</td>
                        <td>{{ $baca->user->name }}</td>
                        <td>{{ $baca->tanggal }}</td>
                        <td>{{ $baca->waktu_baca_terakhir }}</td>
                        <td>
                            <a href="{{ route('bacas.show', $baca->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('bacas.edit', $baca->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('bacas.destroy', $baca->id) }}" method="POST" style="display:inline-block;">
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
