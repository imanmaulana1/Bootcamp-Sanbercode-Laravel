@extends('layout.master')
@section('judul')
Halaman Edit Data Cast Table
@endsection

@section('content')
<form action="/cast/{{$cast->id}}" method="POST">
    @csrf
    @method('PUT')
<div class="mb-3">
  <label class="form-label">Nama Cast</label>
  <input type="text" class="form-control" name="nama" value="{{$cast->nama}}" placeholder="Enter your name...">
</div>
@error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="mb-3">
  <label class="form-label">Umur</label>
  <input type="number" class="form-control" value="{{$cast->umur}}" name="umur">
</div>
@error('umur')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="mb-3">
  <label class="form-label">Bio</label>
  <textarea class="form-control" name="bio" rows="3">{{$cast->bio}}</textarea>
</div>
@error('bio')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection