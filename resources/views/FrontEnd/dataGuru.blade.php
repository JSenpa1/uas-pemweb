@extends('layouts.main')

@section('content')
    <div>
        @foreach ($gurus as $guru)
            <div>
                {{ $guru->nama }}
            </div>
        @endforeach
    </div>
@stop
