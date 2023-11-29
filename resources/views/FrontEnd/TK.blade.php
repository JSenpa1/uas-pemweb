@extends('layouts.main')

@section('content')
    {{-- <div>
        <img src="{{ asset('classroom_1542034403442_61914801_ver1.0.webp') }}" class="sm:w-46 md:h-96 md:w-full object-cover" alt="classroomImage"/>
    </div> --}}

    <div id="indicators-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="{{ asset('galeri/1.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 brightness-75" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('galeri/dua.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 brightness-75" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('galeri/3.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 brightness-75" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('galeri/4.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 brightness-75" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('galeri/5.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 brightness-75" alt="...">
            </div>
        </div>

        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white  group-hover:bg-zinc-500 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white  group-hover:bg-zinc-500 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

<div style="background-color:#265073;">
<div class="container mx-auto md:px-6">
  <section class="">
    <div class="flex flex-wrap pt-6">
      <div class="mb-6 w-full shrink-0 grow-0 basis-auto lg:mb-0 lg:w-6/12 lg:pr-6">
        <div
          class="ripple relative overflow-hidden md:rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
          data-te-ripple-init data-te-ripple-color="light">
          <img src="{{ asset('galeri/Activist.png') }}" class="w-full" alt="Louvre" />
          <a href="#!">
            <div
              class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
            </div>
          </a>
        </div>
      </div>

      <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 lg:pl-6 md:pt-36" style="color:white;">
      <h3 class="mb-4 text-2xl font-bold">Sekolah dengan ragam kegiatan</h3>
        <div class="mb-4 flex items-center text-sm font-medium text-primary dark:text-primary-400">
        <p class="mb-6">
        Walaupun mengedepankan Akademis, Kami tidak membiarkan murid Bosan dengan kegiatan belajar mengajar saja. Ragam aktivitas seperti Berenang, Melukis, Futsal, Dan masih banyak lainnya mampu menuntun Tumbuh Kembang anak anda tidak hanya secara akademis, namun juga mendorong potensi Kreativitas, Sportivitas, dan Kemampuan anak untuk Bersosialisasi anak anda
        </p>
      </div>
    </div>

    {{-- <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 lg:pr-6 md:pt-32" style="color:white;">
        <h3 class="mb-4 text-2xl font-bold">Sekolah islami yang cocok untuk anak</h3>
        <div
          class="ripple relative overflow-hidden md:rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
          data-te-ripple-init data-te-ripple-color="light">
          <img src="{{ asset('galeri/3.png') }}" class="w-full" alt="Louvre" />
          <a href="#!">
            <div
              class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
            </div>
          </a>
        </div>
      </div> --}}

      {{-- <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 lg:pr-6 md:pt-32" style="color:white;">
        <h3 class="mb-4 text-2xl font-bold">Sekolah islami yang cocok untuk anak</h3>
        <div class="mb-4 flex items-center text-sm font-medium text-primary dark:text-primary-400">
        <p>
        Ilmu akademis saja tidak akan cukup untuk membantu tumbuh kembang anak. Oleh karena itu, kami juga membekali anak dengan Ilmu-ilmu agama agar kelak anak anda menjadi pribadi yang memiliki ilmu beserta Akhlak yang baik, Etika yang baik sesuai dengan Ajaran-ajaran Islam. Karena pada dasarnya Ilmu tanpa didasari agama adalah nol.
        </p>
      </div>
    </div> --}}

    <div class="mb-16 flex flex-wrap lg:flex-row-reverse">
        <div class="mb-6 w-full shrink-0 grow-0 basis-auto lg:mb-0 lg:w-6/12 lg:pl-6">
          <div
            class="ripple relative overflow-hidden md:rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
            data-te-ripple-init data-te-ripple-color="light">
            <img src="{{ asset('galeri/3.png') }}" class="w-full" alt="Louvre" />
            <a href="#!">
              <div
                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
              </div>
            </a>
          </div>
        </div>

        <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 lg:pr-6 md:pt-32" style="color:white;">
          <h3 class="mb-4 text-2xl font-bold">Sekolah islami yang cocok untuk anak</h3>
          <div class="mb-4 flex items-center text-sm font-medium text-primary dark:text-primary-400">
          <p>
          Ilmu akademis saja tidak akan cukup untuk membantu tumbuh kembang anak. Oleh karena itu, kami juga membekali anak dengan Ilmu-ilmu agama agar kelak anak anda menjadi pribadi yang memiliki ilmu beserta Akhlak yang baik, Etika yang baik sesuai dengan Ajaran-ajaran Islam. Karena pada dasarnya Ilmu tanpa didasari agama adalah nol.
          </p>
        </div>
      </div>

    <div class="flex flex-wrap">
      <div class="mb-6 w-full shrink-0 grow-0 basis-auto lg:mb-0 lg:w-6/12 lg:pr-6">
        <div
          class="ripple relative overflow-hidden md:rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
          data-te-ripple-init data-te-ripple-color="light">
          <img src="{{ asset('galeri/Madings.png') }}" class="w-full" alt="Louvre" />
          <a href="#!">
            <div
              class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
            </div>
          </a>
        </div>
      </div>

      <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 lg:pl-6 md:pt-28" style="color:white;">
      <h3 class="mb-4 text-2xl font-bold">Ruang Kelas bervariasi</h3>
    <div class="mb-4 flex items-center text-sm font-medium text-primary dark:text-primary-400">
        <p>
        Kami tidak menghadirkan ruang kelas yang hanya itu-itu saja, melainkan kami memiliki beberapa ruang kelas bervariasi yang akan digunakan untuk kegiatan yang beragam pula.
      </div>
    </div>
  </section>
</div>
</div>
@stop



