@extends('layout.app')

@section('title','Tratamiento Nuevo')
@section('seleccionado10','seleccionado10')

@section('content')
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
            <center>
              <div class="card" style="width:50%; text-align:left;">
                  <div class="card-header card-header-primary"  style="background-color:#007FB3;">
                    <div class="media">
                      <div class="media-body" style="color:#fff;">
                        <h5 class="mt-0 mb-1 card-title">Detalle de la Sugerencia</h5>
                        <p class="card-category">Aqui se muestra el detalle de la sugerencia</p>
                      </div>
                      <img src="{{asset('imagenes/informe.png')}}" class="img-fluid" style="width:100px;" >
                    </div>
                  </div>
                  <div class="card-body" style="background-color:#71AFC8;">
                    <h5 class="card-title"><strong>Nombre:</strong> {{$suggestion->full_name}}</h5>
                    <h5 class="card-title"><strong>Telefono o Celular:</strong> {{$suggestion->cel}}</h5>
                    <h5 class="card-title"><strong>Correo Electronico:</strong> {{$suggestion->email}}</h5>
                    <center><h5 class="card-title"><strong>Descripcion de la Sugerencia</strong></h5></center>
                    <h5 style="background:#ffffff; border: 2px solid #000000; border-radius: 5px; height:60px; padding-top:2%; padding-left:2%;">{{$suggestion->description}}</h5>
                    <center><a href="{{ url('/suggestion') }}" class="btn btn-success">Regresar</a></center>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endsection()
