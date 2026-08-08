<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Ekskul</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Pastikan Anda menggunakan Vite atau asset loader yang sesuai -->
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->
        @include('layouts.navbar')

        <!-- Content -->
        <main class="flex-1">
            @yield('content')
        </main>
    </div>
</body>

</html>
