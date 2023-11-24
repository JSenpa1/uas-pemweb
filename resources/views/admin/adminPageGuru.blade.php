@extends('layouts.admin')

@section('content')
    @foreach ($gurus as $guru)
        <h1>{{ $guru->nama }}</h1>
    @endforeach
    <button>Add more</button>
@endsection
