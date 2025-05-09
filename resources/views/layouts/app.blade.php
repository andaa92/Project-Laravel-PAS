<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Sistem Nilai Sekolah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom font (optional) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between">
            <h1 class="font-bold text-lg">SMK App</h1>
            <ul class="flex gap-4">
                <li><a href="{{ route('murid.index') }}" class="hover:underline">Murid</a></li>
                <li><a href="{{ route('guru.index') }}" class="hover:underline">Guru</a></li>
                <li><a href="{{ route('nilai.index') }}" class="hover:underline">Nilai</a></li>
                <li><a href="{{ route('mata-pelajaran.index') }}" class="hover:underline">Mapel</a></li>
            </ul>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container mx-auto p-6">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="text-center p-4 text-sm text-gray-500">
        &copy; {{ date('Y') }} SMK App. All rights reserved.
    </footer>
</body>

</html>
