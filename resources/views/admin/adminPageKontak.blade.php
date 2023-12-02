@extends('layouts.admin')

@section('content')
    <div class="flex flex-wrap gap-6">
        @foreach ($kontaks as $kontak)
        <div class="max-w-sm w-full lg:max-w-full lg:flex">
            <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('/img/card-left.jpg')" title="Woman holding a mug">
            </div>
            <div class="border border-gray-400 bg-white rounded-xl p-4 flex flex-col justify-between leading-normal">
              <div class="mb-8">
                <div class="text-gray-900 font-bold text-xl mb-2">{{ $kontak->judul }}</div>
                <p class="text-gray-700 text-base">{{ $kontak->pertanyaan }}</p>
              </div>
              <div class="flex items-center">
                <img class="w-10 h-10 rounded-full mr-4" src="{{ asset('logo.png') }}" alt="Avatar of Jonathan Reinink">
                <div class="text-sm">
                  <p class="text-gray-900 leading-none">{{ $kontak->email }}</p>
                  <p class="text-gray-600">{{ $kontak->created_at }}</p>
                </div>
              </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
