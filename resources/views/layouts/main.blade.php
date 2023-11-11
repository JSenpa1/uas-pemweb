<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav>
        <h1>Ini Navbar</h1>
    </nav>

    {{-- Ini Yang Di Edit Ya Front Enders --}}
    <div class="flex flex-col min-h-screen">
        <div class="container mx-6 mt-6">
            <h1 class="text-3xl font-bold underline">Sekolah</h1>
            @yield('content')
        </div>

        <footer class="mt-auto">
            @yield('footer')
        </footer>
    </div>
</body>
</html>
