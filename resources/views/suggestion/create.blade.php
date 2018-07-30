@extends('layouts.app')

@section('title','Tratamiento Nuevo')
@section('seleccionado4','seleccionado4')

@section('content')
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
            <center>
              <div class="card" style="width:50%; text-align:left;">
                  <div class="card-header card-header-primary"  style="background-color:#007FB3;">
                    <div class="media">
                      <div class="media-body" style="color:#fff;">
                        <h5 class="mt-0 mb-1 card-title">Registrar Sugerencia</h5>
                        <p class="card-category">Ingrese sus datos para registrar una segerencia a la Clinica Dental</p>
                      </div>
                      <img src="{{asset('imagenes/informe.png')}}" class="img-fluid" style="width:100px;" >
                    </div>
                  </div>
                  <div class="card-body" style="background-color:#71AFC8;">
                    <form class="form-group" action="{{route('suggestion.store')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label>Nombre Completo</label>
                          <input type="text" class="form-control" name="full_name">
                        </div>
                        <div class="form-group col-md-12">
                          <label>Teléfono o Celular</label>
                          <input type="text" class="form-control" name="cel">
                        </div>
                        <div class="form-group col-md-12">
                          <label>Correo Electrónico</label>
                          <input type="text" class="form-control" name="email">
                        </div>
                        <div class="form-group col-md-12">
                          <label>Descripcion</label>
                          <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                      </div>
                      <center><button type="submit" class="btn btn-primary" id="fondo"><i class="fas fa-briefcase-medical"></i> Registrar</button></center>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endsection()
