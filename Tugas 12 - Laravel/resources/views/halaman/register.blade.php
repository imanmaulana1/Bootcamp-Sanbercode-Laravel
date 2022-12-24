@extends('layout.master')

@section('judul')
    Buat Account Baru!
@endsection

@section('content')
    <h2>Sign Up Form</h2>
    <form action="/welcome" method="post">
    @csrf
 
 <!-- Equivalent to... -->
 <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <label for="f_name">First name:</label><br />
      <input type="text" name="f_name" /><br /><br />
      <label for="l_name">Last name:</label><br />
      <input type="text" name="l_name" /><br /><br />
      <label for="gender">Gender:</label><br />
      <input type="radio" name="gender" />Male <br />
      <input type="radio" name="gender" />Female <br />
      <input type="radio" name="gender" />Other <br /><br />
      <label for="nationality">Nationality:</label>
      <select name="nationality" id="nationality">
        <option value="Indonesian">Indonesian</option>
        <option value="American">American</option>
        <option value="British">British</option></select
      ><br /><br />
      <label for="language">Language Spoken:</label><br />
      <input type="checkbox" name="language" /> Bahasa Indonesia <br />
      <input type="checkbox" name="language" /> English <br />
      <input type="checkbox" name="language" /> Other <br /><br />
      <label for="bio">Bio:</label><br />
      <textarea name="bio" cols="30" rows="10"></textarea><br />
      <input type="submit" value="Sign Up" />
    </form>
    @endsection