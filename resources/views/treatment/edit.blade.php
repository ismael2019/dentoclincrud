@extends('layout.app')
@section('title','Editar Paciente')
@section('content')
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header card-header-primary" style="background-color:#007FB3">
                    <div class="media">
                      <div class="media-body" style="color:#fff;">
                        <h5 class="mt-0 mb-1 card-title">Modificar Paciente</h5>
                        <p class="card-category">Modificar los datos del paciente</p>
                      </div>
                      <img src="{{asset('imagenes/editar.png')}}" class="img-fluid rounded-circle" style="background-color:#ffffff; width:90px;" >
                    </div>
                  </div>
                  <div class="card-body" style="background-color:#71AFC8;">
                    <form class="form-group" action="{{route('treatment.update',$treatment->id)}}" method="POST" enctype="multipart/form-data">
                      @method ('PUT')
                      @csrf
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label>Tratamiento</label>
                          <input type="text" class="form-control" name="name" value="{{$treatment->name}}">
                        </div>


                      </div>
                            <center><button type="submit" onclick="return confirm('Seguro que quiere Modificar los datos del Tratamiento?');" class="btn btn-success"><i class="far fa-edit"></i> Actualizar</button>
                            <a href="{{url('/treatment')}}" class="btn btn-danger"><i class="fas fa-ban"></i> Cancelar</a>
                            </center>
                    </form>
                 </div>
              </div>
          </div>
      </div>
  </div>

@endsection()
