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
    <div class="flex flex-col min-h-full">
    <header class="bg-blue-400">
        <nav class="flex justify-between items-center w-[92%] mx-auto">
            <div>
                <img class="w-16 cursor-pointer" src="{{ asset('logo.png') }}" alt="...">
            </div>
            <div
                class="nav-links duration-500 md:static absolut md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8 text-white">
                    <li>
                        <a class="hover:text-sky-700" href="#">Profil</a>
                    </li>
                    <li>
                        <a class="hover:text-sky-700" href="#">Galeri</a>
                    </li>
                    <li>
                        <a class="hover:text-sky-700" href="#">Data Guru</a>
                    </li>
                    <li>
                        <a class="hover:text-sky-700" href="#">Kontak</a>
                    </li>
                    <li>
                        <a class="hover:text-sky-700" href="#">Pendaftaran</a>
                    </li>
                </ul>
            </div>
            {{-- @if(Route::has('login'))
            @auth
            <div>
                <a href="{{ url('/home') }}" class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec]">Dashboard</a>
            </div>
            @else
                <div class="">
                    <button class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec]" onclick="window.location.href='{{ route('login') }}'">Sign in</button>
                    <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
                </div>

                @if (Route::has('register'))
                <div>
                    <a href="{{ route('register') }}" class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec]">Register</a>
                </div>
                @endif
            @endauth
            @endif --}}
            <div>
            @if (Route::has('login'))
                <div class="flex flex-wrap gap-4">
                    @auth
                        <a href="{{ url('/home') }}" class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec]">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec]">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec]">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
        </nav>
    </header>

    {{-- @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

    {{-- <script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e){
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
    </script> --}}

    <div>
        @yield('content')
    </div>

    <footer class="bg-white rounded-b-lg shadow dark:bg-gray-900">
        <div class="w-full mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="#" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('logo.png') }}" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Taman Kanak-Kanak/PAUD Az-Zahra</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Profil</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Galeri</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Data Guru</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Kontak</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Pendafaran</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">TK Az-Zahra</a>. All Rights Reserved.</span>
        </div>
    </footer>


    </div>
</body>
</html>
