@extends('layout.app')

@section('title', 'jadwal')

@section('content')


<table class="table">
  <thead>
    <tr>
      <th scope="col">Jadwal</th>
      <th scope="col">Mata Kuliah</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Jadwal as $jdw)
    <tr>
    <td> {{ $jdw['jadwal'] }} </td>
    <td> {{ $jdw['matakuliah_id'] }} </td>
    </tr>
    @endforeach
  </tbody>
</table>


<a type="button" href="/jadwal/create" class="btn btn-primary">Tambah</a>




@endsection