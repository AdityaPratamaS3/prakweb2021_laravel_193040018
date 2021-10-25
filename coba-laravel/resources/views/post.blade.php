@extends('layouts.main')
@section('container')

<h1 class="mb-5">{{ $post->title}}</h1>

<p>By. <a href="#" class="text-decoration-none"></a><a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{$post->category->name}}</a></p>

{!! $post->body !!}

<a href="/posts" class="d-block mt-3">back to posts</a>
@endsection