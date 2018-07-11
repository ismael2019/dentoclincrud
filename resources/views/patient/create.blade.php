@extends('layout.app')

@section('title','Paciente Nuevo')
@section('seleccionado','seleccionado')
@section('content')
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header card-header-primary"  style="background-color:#007FB3";>
                    <div class="media">
                      <div class="media-body" style="color:#fff;">
                        <h5 class="mt-0 mb-1 card-title">Registrar nuevo paciente</h5>
                        <p class="card-category">Ingrese todos los datos del paciente pata que sea registrado</p>
                      </div>
                      <img src="{{asset('imagenes/lista.png')}}" class="img-fluid" style="width:90px;" >
                    </div>
                  </div>
                  <div class="card-body" style="background-color:#71AFC8;">
                    <form class="form-group" action="{{ route('patient.store')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label>Cedula de Identidad</label>
                          <input type="text" class="form-control" placeholder="Ingrese número de CI" name="c_i">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="">Nombres</label>
                          <input type="text" class="form-control" placeholder="Ingrese Nombres del Paciente" name="name">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="">Apellido</label>
                          <input type="text" class="form-control" placeholder="Ingrese Apellidos del Paciente" name="last_name">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-1">
                          <label for="">Edad</label>
                          <input type="text" class="form-control" placeholder="Edad" name="age">
                        </div>
                        <div class="form-group col-md-2">
                          <label for="">Sexo</label>
                          <select class="form-control"  name="gender">
                            <option>Seleccione genero</option>
                            <option>Masculino</option>
                            <option>Femenino</option>
                          </select>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="">email</label>
                          <input type="email" class="form-control"  placeholder="Paciente@mail.com" name="email">
                        </div>
                        <div class="form-group col-md-3">
                          <label for="">Telefono</label>
                          <input type="text" class="form-control" placeholder="Ingrese Número Telefonico del Paciente" name="phone">
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
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection()
