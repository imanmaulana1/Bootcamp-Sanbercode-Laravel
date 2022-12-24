@extends('layout.master')
@section('judul')
Halaman List Cast
@endsection

@section('content')
<a href="/cast/create" class="btn btn-primary btn-sm mb-4">Add Data</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Cast</th>
      <th scope="col">Umur</th>
      <th scope="col">Bio</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @forelse ($cast as $key => $value)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $value->nama }}</td>
        <td>{{ $value->umur}}</td>
        <td>{{ $value->bio}}</td>
        <td>
       
          <form action="/data/{{$value->id}}" method="POST">
            @csrf
            @method('DELETE')
            <a href="/cast/{{$value->id}}" class="btn btn-success btn-sm">Detail</a>
          <a href="/cast/{{$value->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
        </td>
</tr>
@empty
    <tr>
        <td>No users</td>
</tr>
@endforelse
     </tbody>
</table>
@endsection