<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HEANG SENGHOR | Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('asset/css/stylesheet.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('sl.png') }}" type="image/x-icon">
    
</head>
<body>
    @include('layouts.header')
    
    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    <script src="{{ asset('asset/js/main.js') }}"></script>
</body>
</html>
