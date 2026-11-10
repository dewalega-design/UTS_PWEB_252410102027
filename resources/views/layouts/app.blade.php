<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantlog - @yield('title')</title>
    <!-- Memanggil CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    
    <x-navbar />

    <main class="container">
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>