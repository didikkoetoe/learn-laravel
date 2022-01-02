@extends('layouts.main')
@section('container')
    <h2 class="text-center">My Blog</h2>
    @foreach ($blogs as $post)
        <article>
          <a href="/post/{{ $post->slug }}">
            <h1>{{ $post->title }}</h1>
          </a>
          <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection