@extends('layout.app')

@section('title', 'tambah data')

@section('content')



<form action="/absen" method="post">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Waktu</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="waktu_absen">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mahasiswa</label>
    <input type="text" name="mahasiswa_id" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mata Kuliah</label>
    <input type="text" name='matakuliah_id' class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Keterangan</label>
    <input type="text" name='keterangan' class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>






@endsection