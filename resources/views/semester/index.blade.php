@extends('layout.app')

@section('title', 'semester')

@section('content')




<table class="table">
  <thead>
    <tr>
      <th scope="col">Semester</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Semester as $smp)
    <tr>
    <td> {{ $smp['semester'] }} </td>

    </tr>
    @endforeach
  </tbody>
</table>

<a type="button" href="/semester/create" class="btn btn-primary">Tambah</a>


@endsection