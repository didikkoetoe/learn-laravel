@extends('layouts.main')
@section('container')
    <h2 class="text-center">My Blog</h2>
    @foreach ($blogs as $post)
        <article>
          <a href="/post/{{ $post['slug'] }}">
            <h1>{{ $post['title'] }}</h1>
          </a>
          <h4>By : {{ $post['author'] }}</h4>
          <p>{{ $post['body'] }}</p>
        </article>
    @endforeach
@endsection