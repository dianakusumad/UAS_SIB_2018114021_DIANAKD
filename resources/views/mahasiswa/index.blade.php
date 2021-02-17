@extends('layout.app')

@section('title', 'mahasiswa')

@section('content')


<table class="table">
  <thead>
    <tr>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">Alamat</th>
      <th scope="col">No Telpon</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Mahasiswa as $mhs)
    <tr>
    <td> {{ $mhs['nama_mahasiswa'] }} </td>
    <td> {{ $mhs['alamat'] }} </td>
    <td> {{ $mhs['no_telpon'] }} </td>
    <td> {{ $mhs['email'] }} </td>
    </tr>
    @endforeach
  </tbody>
</table>




<a type="button" href="/mahasiswa/create" class="btn btn-primary">Tambah</a>







@endsection