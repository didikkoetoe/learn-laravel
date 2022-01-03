@extends('layouts.main')
@section('container')
    <h2 class="text-center">Halaman Blog Post</h2>
    @foreach ($posts as $post)
        <article>
          <a href="/post/{{ $post->slug }}">
            <h1>{{ $post->title }}</h1>
          </a>
          <p>By : <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
          <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection