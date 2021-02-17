@extends('layout.app')

@section('title', 'absen')

@section('content')


<table class="table">
  <thead>
    <tr>
      <th scope="col">Waktu Absen</th>
      <th scope="col">Mahasiswa Id</th>
      <th scope="col">Matakuliah Id</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Absen as $ab)
    <tr>
    <td> {{ $ab['waktu_absen'] }} </td>
    <td> {{ $ab['mahasiswa_id'] }} </td>
    <td> {{ $ab['matakuliah_id'] }} </td>
    <td> {{ $ab['keterangan'] }} </td>
    </tr>
    @endforeach
  </tbody>
</table>
<a type="button" href="/absen/create" class="btn btn-primary">Tambah</a>




@endsection