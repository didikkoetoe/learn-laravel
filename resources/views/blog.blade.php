@extends('layouts.main')
@section('container')
    <h1>{{ $post->title }}</h1>
    <h3>Ditulis oleh {{ $post->user->name }} in <a class="text-decoration-none" href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></h3>
    <p>{!! $post->body !!}</p>
    <a href="/blog" class="btn btn-success">Kembali</a>
@endsection