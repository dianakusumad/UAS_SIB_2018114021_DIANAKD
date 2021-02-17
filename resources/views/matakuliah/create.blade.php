@extends('layout.app')

@section('title', 'tambah data')

@section('content')



<form action="/matakuliah" method="post">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Matakuliah</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
    placeholder="Enter email" name="nama_matakuliah">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Sks</label>
    <input type="text" name="sks" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>






@endsection