@extends('layouts.main')

@section('content')
    {{-- <div>
        <img src="{{ asset('classroom_1542034403442_61914801_ver1.0.webp') }}" class="sm:w-46 md:h-96 md:w-full object-cover" alt="classroomImage"/>
    </div> --}}

    <div id="indicators-carousel" class="relative w-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="{{ asset('classroom_1542034403442_61914801_ver1.0.webp') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 brightness-75" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/docs/images/carousel/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/docs/images/carousel/carousel-4.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/docs/images/carousel/carousel-5.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
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

<div class="container my-24 mx-auto md:px-6" style="background-color:#87BD2F;">
  <section class="mb-32">
    <div class="mb-16 flex flex-wrap">
      <div class="mb-6 w-full shrink-0 grow-0 basis-auto lg:mb-0 lg:w-6/12 lg:pr-6">
        <div
          class="ripple relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
          data-te-ripple-init data-te-ripple-color="light">
          <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/028.jpg" class="w-full" alt="Louvre" />
          <a href="#!">
            <div
              class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
            </div>
          </a>
        </div>
      </div>

      <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 lg:pl-6">
      <h3 class="mb-4 text-2xl font-bold">Aktivitas menyenangkan!</h3>
        <div class="mb-4 flex items-center text-sm font-medium text-primary dark:text-primary-400">
        <p class="mb-6">
          Ut pretium ultricies dignissim. Sed sit amet mi eget urna placerat
          vulputate. Ut vulputate est non quam dignissim elementum. Donec a
          ullamcorper diam.
        </p>
      </div>
    </div>

    <div class="mb-16 flex flex-wrap lg:flex-row-reverse">
      <div class="mb-6 w-full shrink-0 grow-0 basis-auto lg:mb-0 lg:w-6/12 lg:pl-6">
        <div
          class="ripple relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
          data-te-ripple-init data-te-ripple-color="light">
          <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/033.jpg" class="w-full" alt="Louvre" />
          <a href="#!">
            <div
              class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
            </div>
          </a>
        </div>
      </div>

      <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 lg:pr-6">
        <h3 class="mb-4 text-2xl font-bold">Sekolah Al-Quran</h3>
        <div class="mb-4 flex items-center text-sm font-medium text-primary dark:text-primary-400">
        <p>
          Duis sagittis, turpis in ullamcorper venenatis, ligula nibh porta
          dui, sit amet rutrum enim massa in ante. Curabitur in justo at
          lorem laoreet ultricies. Nunc ligula felis, sagittis eget nisi
          vitae, sodales vestibulum purus. Vestibulum nibh ipsum, rhoncus
          vel sagittis nec, placerat vel justo. Duis faucibus sapien eget
          tortor finibus, a eleifend lectus dictum. Cras tempor convallis
          magna id rhoncus. Suspendisse potenti. Nam mattis faucibus
          imperdiet. Proin tempor lorem at neque tempus aliquet. Phasellus
          at ex volutpat, varius arcu id, aliquam lectus. Vestibulum mattis
          felis quis ex pharetra luctus. Etiam luctus sagittis massa, sed
          iaculis est vehicula ut.
        </p>
      </div>
    </div>

    <div class="flex flex-wrap">
      <div class="mb-6 w-full shrink-0 grow-0 basis-auto lg:mb-0 lg:w-6/12 lg:pr-6">
        <div
          class="ripple relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
          data-te-ripple-init data-te-ripple-color="light">
          <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/079.jpg" class="w-full" alt="Louvre" />
          <a href="#!">
            <div
              class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
            </div>
          </a>
        </div>
      </div>

      <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 lg:pl-6">
      <h3 class="mb-4 text-2xl font-bold">Anak-anak yang gembira</h3>
    <div class="mb-4 flex items-center text-sm font-medium text-primary dark:text-primary-400">
        <p>
          Sed sollicitudin purus sed nulla dignissim ullamcorper. Aenean
          tincidunt vulputate libero, nec imperdiet sapien pulvinar id.
          Nullam scelerisque odio vel lacus faucibus, tincidunt feugiat
          augue ornare. Proin ac dui vel lectus eleifend vestibulum et
          lobortis risus. Nullam in commodo sapien. Curabitur ut erat congue
          sem finibus eleifend egestas eu metus. Sed ut dolor id magna
          rutrum ultrices ut eget libero. Duis vel porttitor odio. Ut
          pulvinar sed turpis ornare tincidunt. Donec luctus, mi euismod
          dignissim malesuada, lacus lorem commodo leo, tristique blandit
          ante mi id metus. Integer et vehicula leo, vitae interdum lectus.
          Praesent nulla purus, commodo at euismod nec, blandit ultrices
          erat. Aliquam eros ipsum, interdum et mattis vitae, faucibus vitae
          justo. Nulla condimentum hendrerit leo, in feugiat ipsum
          condimentum ac. Maecenas sed blandit dolor.
        </p>
      </div>
    </div>
  </section>
</div>
@stop



