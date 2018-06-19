@extends('layout.app')

@section('title','Tratamiento Nuevo')
@section('seleccionado4','seleccionado4')

@section('content')
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header card-header-primary"  style="background-color:#007FB3;">
                    <div class="media">
                      <div class="media-body" style="color:#fff;">
                        <h5 class="mt-0 mb-1 card-title">Registrar nueva tratamiento</h5>
                        <p class="card-category">Ingrese el nombre del Tratamiento</p>
                      </div>
                      <img src="{{asset('imagenes/Reserva.png')}}" class="img-fluid" style="width:90px;" >
                    </div>
                  </div>
                  <div class="card-body" style="background-color:#71AFC8;">
                    <form class="form-group" action="/treatment" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label>Nombre del Tratamiento</label>
                          <input type="text" class="form-control" name="name">
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
