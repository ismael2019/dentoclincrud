@extends('layout.app')

@section('title','Detalle')
@section('texto1','Detalle Expecifico')
@section('texto2','Detalle especifico del paciente') <h2>{{$patient->name}}</h2>
@section('content')
  <table class="table table-striped">
    <thead style="color:#ffffff; background-color:#019BB9;">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Cedula de identidad</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Edad</th>
        <th scope="col">Genero</th>
        <th scope="col">Email</th>
        <th scope="col">Telefono</th>
        <th scope="col">Ciudad</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">{{$patient->id}}</td>
        <td>{{$patient->c_i}}</td>
        <td>{{$patient->name}}</td>
        <td>{{$patient->last_name}}</td>
        <td>{{$patient->age}}</td>
        <td>{{$patient->gender}}</td>
        <td>{{$patient->email}}</td>
        <td>{{$patient->phone}}</td>
        <td>{{$patient->city}}</td>
      </tr>

    </tbody>
  </table>
@endsection()
