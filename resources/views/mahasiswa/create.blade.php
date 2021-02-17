@extends('layout.app')

@section('title', 'tambah data')

@section('content')



<form action="/mahasiswa" method="post">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Mahasiswa</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
    placeholder="Enter email" name="nama_mahasiswa">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">No Telp</label>
    <input type="text" name='no_telpon' class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" name='email' class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>






@endsection