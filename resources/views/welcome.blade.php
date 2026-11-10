<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantlog - @yield('title')</title>
</head>
<body>
    
    <!-- Memanggil Navbar (Syarat komponen UTS) -->
    <x-navbar />

    <main style="padding: 20px; font-family: sans-serif;">
        <!-- Area konten yang akan berubah-ubah tiap halaman -->
        @yield('content')
    </main>

    <hr>
    
    <!-- Memanggil Footer (Syarat komponen UTS) -->
    @include('components.footer')

</body>
</html>