
@extends('layouts/main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>

    <p>By<a href="#" class="text-decoration-none"> {{ $post->author->username }}</a> in <a href="/categories/{{ $post->author->slug }}"class="text-decoration-none">{{ $post->category->name }}</a></p>

    {!! $post->body !!}

    <a href="/blog" class="d-block mt-3">Back to Posts</a>

@endsection