@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Categories </h1>
@foreach($categories as $category)
<article class=>
  <h2>
    <ul>
      <li>
  </h2><a href="/categories/{{ $category->slug }}">{{ $category->name}}</a>
  </li>
  </ul>


</article>

@endforeach

@endsection