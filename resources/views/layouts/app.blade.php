<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog CRUD')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans text-gray-800">
    <nav class="bg-blue-600 p-4 text-white shadow-md">
        <div class="container mx-auto font-bold text-xl">
            <a href="{{ route('posts.index') }}">Tugas 10 - Blog Christian</a>
        </div>
    </nav>

    <main class="container mx-auto mt-8 p-4 min-h-[70vh]">
        @yield('content')
    </main>

    <footer class="bg-white text-center p-4 mt-8 shadow-inner text-gray-500 text-sm">
        &copy; {{ date('Y') }} Tugas Rutin 10 - Christian Arga Capah
    </footer>
</body>
</html>