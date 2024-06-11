<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Perpustakaan</h1>
        <nav>
            <button><a href="{{ route('bukus.index') }}">Masuk</a></button>
        </nav>
    </div>
</body>
</html>
