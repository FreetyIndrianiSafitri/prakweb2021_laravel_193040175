
@extends('layouts/main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>

    <p>by. Freety Indriani Safitri in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {!! $post->body !!}

    <a href="/blog">Back to Posts</a>

@endsection