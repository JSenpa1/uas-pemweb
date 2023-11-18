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
        <div>
            <h1>Logo</h1>
        </div>
        <div>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </nav>

    <div class="container mx-6 mt-6">
        <h1 class="text-3xl font-bold underline">Hello World</h1>
        @yield('content')
    </div>
    <div>
       

<footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
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
