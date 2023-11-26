@extends('layouts.admin')

@section('content')
    <div class="flex flex-wrap gap-6">
    @foreach ($gurus as $guru)

        <div class="w-full max-w-sm bg-gray-800 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 sm:pt-6">
            <div class="flex flex-col items-center pb-10">
                <img class="w-20 h-22 mb-3 rounded-full shadow-lg" src="{{ asset('fotoGuru/' . $guru->foto) }}" alt="Foto Guru"/>
                <h5 class="mb-1 text-xl font-medium text-white dark:text-white">{{ $guru->nama }}</h5>
                <span class="text-sm text-white dark:text-gray-400">{{ $guru->jabatan }}</span>
                <div class="flex mt-4 md:mt-6">
                    <a href="/guru/{{ $guru->id }}/edit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</a>
                    <form action="/guru/{{ $guru->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center  text-white bg-red-600 hover:bg-red-800 rounded-lg focus:ring-4 focus:outline-none ms-3">Delete</button>
                    </form>
                </div>
            </div>
        </div>

    @endforeach
    </div>

    <center><a href="/guru/create" class="mt-4 inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah Guru</a></center>
@endsection
