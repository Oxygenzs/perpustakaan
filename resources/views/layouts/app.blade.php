<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Perpustakaan</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('levels.index') }}">Level</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('bukus.index') }}">Buku</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('bacas.index') }}">Baca</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('penulis.index') }}">Penulis</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('penerbits.index') }}">Penerbit</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">User</a></li>
            </ul>
        </div>
    </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
