@extends('layout.app')

@section('title', 'tambah data')

@section('content')



<form action="/semester" method="post">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Semester</label>
    <input type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="semester">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>






@endsection