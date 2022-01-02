@extends('layouts.main')
@section('container')
    <h1 class="text-center">Daftar Kategori</h1>
    @foreach ($categories as $category)
    <ul>
      <li>
        <a href="/category/{{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a>
      </li>
    </ul>
    @endforeach
@endsection