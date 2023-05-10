@extends('layouts.main')

@section('container')
    <h2 class="mb-5 mt-3 text-center">
        Post Categories
    </h2>
    <div class="container">
        <div class="row">
            @foreach ($categories as $c)
                <div class="col-md-4">
                    <a href="/?category={{ $c->slug }}">
                        <div class="card text-light">
                            <img src="https://source.unsplash.com/500x500?{{ $c->name }}" class="card-img"
                                alt="{{ $c->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill fs-4 p-3"
                                    style="background-color: rgba(0,0,0,0.5)">
                                    {{ $c->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
