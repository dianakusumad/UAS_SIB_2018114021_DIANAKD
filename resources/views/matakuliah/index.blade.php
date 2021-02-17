@extends('layout.app')

@section('title', 'mata kuliah')

@section('content')


<table class="table">
  <thead>
    <tr>
      <th scope="col">Nama Matakuliah</th>
      <th scope="col">Sks</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Matakuliah as $mk)
    <tr>
    <td> {{ $mk['nama_matakuliah'] }} </td>
    <td> {{ $mk['sks'] }} </td>
    </tr>
    @endforeach
  </tbody>
</table>



<a type="button" href="/matakuliah/create" class="btn btn-primary">Tambah</a>



@endsection