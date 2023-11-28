<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TK Az-Zahra Admin</title>
    <link rel="icon" href="{{ asset('logo.png') }}" />
    @vite(['resources/css/app.css','resources/js/app.js'])
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" /> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;800&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> --}}
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" /> --}}
</head>
<body>
        {{-- <span class="absolute text-white text-4xl top-5 left-4 cursor-pointer" onclick="Openbar()">
          <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
        </span>
        <div class="sidebar fixed top-0 bottom-0 lg:left-0 left-[-300px] duration-1000
          p-2 w-[300px] overflow-y-auto text-center bg-gray-900 shadow h-screen">
          <div class="text-gray-100 text-xl">
            <div class="p-2.5 mt-1 flex items-center rounded-md ">
              <img src="{{ asset('logo.png') }}" alt="logo" class="w-14"/>
              <h1 class="text-[15px]  ml-3 text-xl text-gray-200 font-bold">Admin Dashboard</h1>
              <i class="bi bi-x ml-20 cursor-pointer lg:hidden" onclick="Openbar()"></i>
            </div>
            <hr class="my-2 text-gray-600">

            <div>
              <div class="p-2.5 mt-3 flex items-center rounded-md
              px-4 duration-300 cursor-pointer  bg-gray-700">
                <i class="bi bi-search text-sm"></i>
                <input class="text-[15px] ml-4 w-full bg-transparent focus:outline-none" placeholder="Serach" />
              </div>

              <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                <i class="bi bi-house-door-fill"></i>
                <span class="text-[15px] ml-4 text-gray-200">Home</span>
              </div>
              <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                <i class="bi bi-people-fill"></i>
                <a href="{{ url('/guru') }}"><span class="text-[15px] ml-4 text-gray-200">Data Guru</span></a>
              </div>
              <hr class="my-4 text-gray-600">
              <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                <i class="bi bi-person-lines-fill"></i>
                <span class="text-[15px] ml-4 text-gray-200">Pendaftaran</span>
              </div>

              <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                <i class="bi bi-chat-left-text-fill"></i>
                <div class="flex justify-between w-full items-center" onclick="dropDown()">
                  <span class="text-[15px] ml-4 text-gray-200">Chatbox</span>
                  <span class="text-sm rotate-180" id="arrow">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </div>
              </div>
              <div class=" leading-7 text-left text-sm font-thin mt-2 w-4/5 mx-auto" id="submenu">
                <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Social</h1>
                <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Personal</h1>
                <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Friends</h1>
              </div>
              <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                <i class="bi bi-box-arrow-in-right"></i>
                <a href="{{ url('/') }}"><span class="text-[15px] ml-4 text-gray-200">Go Home</span></a>
              </div>

            </div>
          </div>
        </div>

        <div class="p-8 sm:ml-64">
            @yield('content')
        </div> --}}

        <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>

        <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <div class="text-gray-100 text-xl">
                    <div class="p-2.5 mt-1 flex items-center rounded-md ">
                        <img src="{{ asset('logo.png') }}" alt="logo" class="w-14"/>
                        <h1 class="text-[15px]  ml-3 text-xl text-gray-200 font-bold">Admin Dashboard</h1>
                        <i class="bi bi-x ml-20 cursor-pointer lg:hidden" onclick="Openbar()"></i>
                    </div>
                    </div>
                </li>
                <li>
                    <a href="{{ url('/admin/dashboard') }}" class="flex items-center p-2  rounded-lg text-white  hover:bg-gray-700 group">
                        <svg class="w-5 h-5  transition duration-75 text-gray-400  group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                        <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                        </svg>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/guru') }}" class="flex items-center p-2 rounded-lg text-white  hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-400  group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Guru</span>
                        </a>
                </li>
                <li>
                    <a href="{{ url('/admin/pendaftaran') }}" class="flex items-center p-2 rounded-lg text-white  hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-400  group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">List Pendaftaran</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admin/showPertanyaan') }}" class="flex items-center p-2 rounded-lg text-white  hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-400  group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M18 4H16V9C16 10.0609 15.5786 11.0783 14.8284 11.8284C14.0783 12.5786 13.0609 13 12 13H9L6.846 14.615C7.17993 14.8628 7.58418 14.9977 8 15H11.667L15.4 17.8C15.5731 17.9298 15.7836 18 16 18C16.2652 18 16.5196 17.8946 16.7071 17.7071C16.8946 17.5196 17 17.2652 17 17V15H18C18.5304 15 19.0391 14.7893 19.4142 14.4142C19.7893 14.0391 20 13.5304 20 13V6C20 5.46957 19.7893 4.96086 19.4142 4.58579C19.0391 4.21071 18.5304 4 18 4Z" fill="currentColor"/>
                            <path d="M12 0H2C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V9C0 9.53043 0.210714 10.0391 0.585786 10.4142C0.960859 10.7893 1.46957 11 2 11H3V13C3 13.1857 3.05171 13.3678 3.14935 13.5257C3.24698 13.6837 3.38668 13.8114 3.55279 13.8944C3.71889 13.9775 3.90484 14.0126 4.08981 13.996C4.27477 13.9793 4.45143 13.9114 4.6 13.8L8.333 11H12C12.5304 11 13.0391 10.7893 13.4142 10.4142C13.7893 10.0391 14 9.53043 14 9V2C14 1.46957 13.7893 0.960859 13.4142 0.585786C13.0391 0.210714 12.5304 0 12 0Z" fill="currentColor"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Pertanyaan</span>
                    </a>
                </li>
                <li>
                        <a href="{{ url('/') }}" class="flex items-center p-2 rounded-lg text-white  hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-400  group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Back to Home</span>
                        </a>
                </li>
            </ul>
            </div>
        </aside>

    <div class="p-4 sm:ml-64">
        @yield('content')
    </div>

    {{-- <script>
        function Openbar() {
          document.querySelector('.sidebar').classList.toggle('left-[-300px]')
        }
      </script> --}}
      {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script> --}}
</body>
</html>
