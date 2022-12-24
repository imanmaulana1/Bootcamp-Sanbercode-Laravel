@extends('layout.master')
@section('judul')
Halaman Add Data Cast Table
@endsection

@section('content')
<form action="/cast" method="POST">
    @csrf
<div class="mb-3">
  <label class="form-label">Nama Cast</label>
  <input type="text" class="form-control" name="nama" placeholder="Enter your name...">
</div>
@error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="mb-3">
  <label class="form-label">Gameplay</label>
  <input type="text" class="form-control" name="gameplay" placeholder="Gameplay">
</div>
@error('gameplay')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="mb-3">
  <label class="form-label">Year</label>
  <input type="number" class="form-control" name="year">
</div>
@error('year')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection