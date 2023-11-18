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
    {{-- Ini Yang Di Edit Ya Front Enders --}}

    {{-- Ini Navbar --}}

    <div class="container mx-6 mt-6">
        <h1 class="text-3xl font-bold underline">Hello World</h1>
        @yield('content')
        @yield('footer')
    </div>
</body>
</html>
