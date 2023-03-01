@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <a href="/" class="d-block mt-3 text-decoration-none fw-bold">⇐ Back to Posts</a>
            <div class="col-md-8">
                <h2 class="text-center mb-4 mt-3">{{ $post->title }}</h2>
                <p>By <a class="text-decoration-none"
                        href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                    in
                    <a href="/?category={{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a>
                </p>

                @if ($post->image)
                    <div style="max-height:350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid"
                            alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}" class="img-fluid"
                        alt="{{ $post->category->name }}">
                @endif
            </div>

            <div class="content my-3 fs-5" style="text-align: justify">
                {!! $post->body !!}
            </div>

        </div>
    </div>
@endsection
