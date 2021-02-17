@extends('layout.app')

@section('title', 'kontrak kuliah')
`
@section('content')


<table class="table">
  <thead>
    <tr>
      <th scope="col">Mahasiswa Id</th>
      <th scope="col">Semester Id</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Kontrakmatakuliah as $kmk)
    <tr>
    <td> {{ $kmk['mahasiswa_id'] }} </td>
    <td> {{ $kmk['semester_id'] }} </td>
    </tr>
    @endforeach
  </tbody>
</table>



<a type="button" href="/kontrak_matakuliah/create" class="btn btn-primary">Tambah</a>



@endsection