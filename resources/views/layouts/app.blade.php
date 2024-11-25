<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Sesuaikan dengan path CSS Anda -->
</head>
<body>
    <div class="container">
        @yield('content') <!-- Tempat konten dari view lain akan dimasukkan -->
    </div>
</body>
</html>