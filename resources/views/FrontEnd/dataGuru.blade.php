@extends('layouts.main')

@section('content')
<center>
    <div class="bg-sky-800">
        <div class="flex flex-wrap gap-6 p-8 xl:ml-56 md:ml-18">
        @foreach ($gurus as $guru)
            <div class="flex flex-col items-center max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-80">
                <a href="#">
                    <img class="rounded-lg w-full mt-8" src="{{ asset("fotoGuru/". $guru->foto) }}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $guru->nama }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Jabatan: {{ $guru->jabatan }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Nomor Telepon: {{ $guru->nomor_telepon }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Tempat Lahir: {{ $guru->tempat_lahir }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Tanggal Lahir: {{ $guru->tanggal_lahir }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Pendidikan: {{ $guru->pendidikan }}</p>
                    {{-- <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a> --}}
                </div>
            </div>
        @endforeach
    </div>
    </div>
</center>
@stop
