@extends('layout.app')

@section('title', 'tambah data')

@section('content')



<form action="/kontrak_matakuliah" method="post">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Mahasiswa Id</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
     placeholder="Enter email" name="mahasiswa_id">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Semester Id</label>
    <input type="text" name="semester_id" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>






@endsection