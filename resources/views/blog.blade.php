@extends('layouts.main')
@section('container')
    <h1>{{ $post['title'] }}</h1>
    <h5>{{ $post['author'] }}</h5>
    <p>{{ $post['body'] }}</p>
    <a href="/blog" class="btn btn-success">Kembali</a>
@endsection