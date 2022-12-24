@extends('layout.master')
@section('judul')
Halaman Detail Cast Table
@endsection

@section('content')
<h1>{{$cast->nama}}</h1>
<p>{{$cast->umur}}</p>
<p>{{$cast->bio}}</p>
<a href="/cast" class="btn btn-warning btn-sm">Back</a>
@endsection