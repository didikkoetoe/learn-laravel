@extends('layouts.main')
@section('container')
    <h1 class="text-center">Post Categories In : {{ $category }}</h1>
    @foreach ($categories as $category)
        <ul>
          <li>
            <a href="/post/{{ $category->slug }}">{{ $category->title }}</a>
          </li>
        </ul>
    @endforeach
@endsection
