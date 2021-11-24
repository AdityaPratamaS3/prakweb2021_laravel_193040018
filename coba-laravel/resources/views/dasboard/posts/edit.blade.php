@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Post</h1>
      </div>
<div class="col-lg-8">
    <form method="Post" action="/dashboard/posts/{{ $post->slug }}" class="mb-5">
      @method('put')
        @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderrors" id="title" name="tite" required autofocus value="{{old('title',$post->title)}}"> 
        @error('title')
        <div class="invalid-feddback">
          {{ $message }}
        </div>
        @enderror('title')

      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderrors" id="slug" name="slug" required value="{{old('title' $post->slug)}}">
        @error('slug')
        <div class="invalid-feddback">
          {{ $message }}
        </div>
        @enderror('title')
      </div>
      <div class="mb-3">
        <label for="Category" class="form-label">Category</label>
        <select class="form-select" name="category_id">
            @foreach ($categories as $category)
            @if(old('category_id'$post->category_id) == $category->id)
            <option value="{{ $category->id }}"selected>{{ $category->name }}</option>
            @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
            @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="Categorybosy" class="form-label">Body</label>
        @error('body')
          <p>{{ message }}</p>
        @enderror('title')
        <input id="id" type="hidden" name="body" value="{{old('body' ,$post->body)}}">
  <trix-editor input="body"></trix-editor>
      </div>






      <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>

<script>
    const title = document.querySelector('#title');
    const title = document.querySelector('#slug');

    title.addEventListener('change', function()){
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e)){
        e.preventDefault();
    }
</script>
@endsection