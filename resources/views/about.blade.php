@extends('layouts.main')
@section('container')
<h1>Nama Saya : {{ $name }}</h1>
<h2>Umur {{ $age }}</h2>
<img class="img-thumbnail" src="img/{{ $image }}" alt="Gambar {{ $name }}">
@endsection