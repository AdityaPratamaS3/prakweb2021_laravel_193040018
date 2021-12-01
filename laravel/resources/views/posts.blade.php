@extends('layouts.main')

@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/posts">
            @if (request('category'))
            <input type="hidden" name="category" value="{{request('category')}}">
            @endif
            @if (request('author'))
            <input type="hidden" name="author" value="{{request('author')}}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{request('search')}}">
                <button class="btn btn-danger" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($posts->count())
<div class="card mb-3">
@if($posts[0]->image)
     <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name}}" class="img-fluid mt-3">
        @else
        </div>
        <img src="https://source.unsplash.com/1200x400?{{ $post[0]->category->name}}" class="card-img-top" alt="{{ $post->category->name}}">
                      @endif
    <div class="card-body text-center">
        <h3 class="card-title"> <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{$post[0]->title}}</h3></a>
        <p>
            <small class="text-muted">
                <p>By. <a href="/posts?author={{ $post[0]->author->username }}" class="text-decoration-none">{{$post[0]-> author-> name}} </a> in <a href="/
        posts? category={{ $post[0]->category->slug  }}" class="text-decoration-none">{{ $post[0]
        ->category->name }}</a> {{ $post[0] ->created_at->diffForHumans() }}
            </small>
        </p>
        <p class="card-text">{{ $post[0] ->exceprt}}</p>

        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>

    </div>



    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)

            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute bg-dark px-3 py-2 ">
                        <a href=" /posts? category= {{ $post->category->slug  }}" class="text-white text-decoration-none">{{ $post->category->name}}</a>
                    </div>
                    @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name}}" class="img-fluid ">
                        @else
                      </div>
      <img src="https://source.unsplash.com/1200x400?{{ $post->category->name}}" alt="{{ $post->category->name}}" class="img-fluid ">
                      @endif
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name}}" class="card-img-top" alt="{{ $post->category->name}}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title}}</h5>
                        <p>
                            <small class="text-muted">
                                <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{$post-> author-> name}} </a> {{ $post ->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <p class="card-text">{{ $post->excerpt}}</p>
                        <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @else
    <p class="text-center fs-4">No Post found.</p>
    @endif

    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>


    @endsection