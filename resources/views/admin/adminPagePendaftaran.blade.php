@extends('layouts.admin')

@section('content')
    <div class="flex flex-wrap gap-4">
        @foreach ($pendaftarans as $pendaftaran)
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <center>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $pendaftaran->nama }}</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-white">Alamat: {{ $pendaftaran->alamat }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-white">Tanggal Lahir: {{ $pendaftaran->tanggal_lahir }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-white">Tempat Lahir: {{ $pendaftaran->tempat_lahir }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-white">Tujuan: {{ $pendaftaran->tujuan }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-white">Nomor Telepon: {{ $pendaftaran->nomor_telepon }}</p>
                </center>
            </div>
        @endforeach
    </div>
@endsection
