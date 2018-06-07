@extends('layout.app')

@section('title','Paciente Nuevo')

@section('texto1','Crear Nuevo Paciente')
@section('texto2','Ingrese los datos del paciente para registrarlo')

@section('content')

<form class="form-group" action="/patient" method="POST" enctype="multipart/form-data">
@csrf
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Cedula de Identidad</label>
      <input type="text" class="form-control" name="c_i">
    </div>
    <div class="form-group col-md-4">
      <label for="">Nombres</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group col-md-4">
      <label for="">Apellido</label>
      <input type="text" class="form-control" name="last_name">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-1">
      <label for="">Edad</label>
      <input type="text" class="form-control" name="age">
    </div>
    <div class="form-group col-md-2">
    <label for="">Sexo</label>
    <select class="form-control" name="gender">
      <option>Seleccione genero</option>
      <option>Masculino</option>
      <option>Femenino</option>
    </select>
  </div>
  <div class="form-group col-md-3">
    <label for="">email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group col-md-3">
    <label for="">Telefono</label>
    <input type="text" class="form-control" name="phone">
  </div>
  <div class="form-group col-md-3">
    <label for="">Departamento</label>
    <select class="form-control" name="city">
      <option>Seleccione Departamento</option>
      <option>Cochabamba</option>
      <option>Santa Cruz</option>
      <option>Beni</option>
      <option>Pando</option>
      <option>La Paz</option>
      <option>Oruro</option>
      <option>Potosi</option>
      <option>Tarija</option>
      <option>Sucre</option>
    </select>
  </div>
</div>
  <center><button type="submit" class="btn btn-primary" id="fondo"><i class="far fa-thumbs-up"></i> Registrar</button></center>
</form>
@endsection()
