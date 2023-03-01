@extends('layouts.main')

@section('container')
    <h2>
        <center>{{ $header }}</center>
    </h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-dark btn-outline-secondary text-light fw-bold" type="submit">Search</button>
                </div>
            </form>
        </div>

        @if ($posts->count())
            <div class="card mb-3">
                @if ($posts[0]->image)
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top img-fluid"
                        alt="{{ $posts[0]->category->name }}">
                @else
                    <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top"
                        alt="{{ $posts[0]->category->name }}">
                @endif
                <div class="card-body">
                    <h3 class="card-title">{{ $posts[0]->title }}</h3>
                    <small class="text-muted">
                        By <a class="text-decoration-none"
                            href="/?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in
                        <a href="/?category={{ $posts[0]->category->slug }}"
                            class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                    <p>{!! $posts[0]->excerpt !!}</p>
                    <button class="btn btn-primary btn-outline-info"><a href="/posts/{{ $posts[0]->slug }}"
                            class="text-decoration-none text-light">Read More..</a></button>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    @foreach ($posts->skip(1) as $post)
                        <div class="col-md-4 mb-3">
                            <div class="card" style="height: 100%">
                                <div class="position-absolute text-light px-3 py-2"
                                    style="background-color: rgba(0,0,0,0.6)">
                                    <a href="/posts?category={{ $post->category->slug }}"
                                        class="text-decoration-none text-light">{{ $post->category->name }}</a>
                                </div>
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid"
                                        alt="{{ $post->category->name }}">
                                @else
                                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                        class="card-img-top" alt="{{ $post->category->name }}">
                                @endif
                                <div class="card-body">
                                    <h3 class="card-title">{{ $post->title }}</h3>
                                    <small class="text-muted">
                                        By <a class="text-decoration-none"
                                            href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                                        {{ $post->created_at->diffForHumans() }}
                                    </small>
                                    <p>{!! $post->excerpt !!}</p>
                                    <button class="btn btn-primary btn-outline-info"><a href="/posts/{{ $post->slug }}"
                                            class="text-decoration-none text-light">Read More..</a></button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <p class="text-center fs-3">No post found.</p>
        @endif

        <div class="d-flex justify-content-end">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
