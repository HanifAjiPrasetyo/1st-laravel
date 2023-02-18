@extends('layouts.main')

@section('container')
    <div class="h2 text-center mb-5">Halaman About</div>
    <div class="text-center">
        <img src="img/{{ $image }}" alt=" {{ $name }} " width="200" height="200"
            class="img-thumbnail rounded-pill">
        <div class="h3 mt-3">{{ $name }} | {{ $school }}</div>
    </div>
@endsection
