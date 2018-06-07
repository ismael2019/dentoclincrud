@extends('layout.app')

@section('title','Editar Paciente')

@section('texto1','Modificar Datos del Paciente')
@section('texto2','Modifique los datos del paciente')

@section('content')

<form class="form-group" action="/patient/{{$patient->id}}" method="POST" enctype="multipart/form-data">
@method ('PUT')
@csrf
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Cedula de Identidad</label>
      <input type="text" class="form-control" name="c_i" value="{{$patient->c_i}}">
    </div>
    <div class="form-group col-md-4">
      <label for="">Nombres</label>
      <input type="text" class="form-control" name="name" value="{{$patient->name}}">
    </div>
    <div class="form-group col-md-4">
      <label for="">Apellido</label>
      <input type="text" class="form-control" name="last_name" value="{{$patient->last_name}}">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-1">
      <label for="">Edad</label>
      <input type="text" class="form-control" name="age" value="{{$patient->age}}">
    </div>
    <div class="form-group col-md-2">
    <label for="">Sexo</label>
    <select class="form-control" name="gender">
      <option>Seleccione genero</option>
      <option value="Masculino" @if($patient->gender=="Masculino") selected @endif>Masculino</option>
      <option value="Femenino" @if($patient->gender=="Femenino") selected @endif>Femenino</option>
    </select>
  </div>
  <div class="form-group col-md-3">
    <label for="">email</label>
    <input type="email" class="form-control" name="email" value="{{$patient->email}}">
  </div>
  <div class="form-group col-md-3">
    <label for="">Telefono</label>
    <input type="text" class="form-control" name="phone" value="{{$patient->phone}}">
  </div>
  <div class="form-group col-md-3">
    <label for="">Departamento</label>
    <select class="form-control" name="city" value="{{$patient->city}}">
      <option>Seleccione Departamento</option>
      <option value="Cochabamba" @if($patient->city=="Cochabamba") selected @endif>Cochabamba</option>
      <option value="Santa Cruz" @if($patient->city=="Santa Cruz") selected @endif>Santa Cruz</option>
      <option value="Beni" @if($patient->city=="Beni") selected @endif>Beni</option>
      <option value="Pando" @if($patient->city=="Pando") selected @endif>Pando</option>
      <option value="La Paz" @if($patient->city=="La Paz") selected @endif>La Paz</option>
      <option value="Oruro" @if($patient->city=="Oruro") selected @endif>Oruro</option>
      <option value="Potosi" @if($patient->city=="Potosi") selected @endif>Potosi</option>
      <option value="Tarija" @if($patient->city=="Tarija") selected @endif>Tarija</option>
      <option value="Sucre" @if($patient->city=="Sucre") selected @endif>Sucre</option>
    </select>
  </div>
</div>
  <center><button type="submit" class="btn btn-success"><i class="far fa-edit"></i> Actualizar</button>
          <a href="{{url('/patient')}}" class="btn btn-danger"><i class="fas fa-ban"></i> Cancelar</a>
  </center>
</form>
@endsection()