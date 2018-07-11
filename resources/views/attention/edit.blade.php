@extends('layout.app')

@section('title','Paciente Nuevo')
@section('content')
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header card-header-primary"  style="background-color:#007FB3;">
                    <div class="media">
                      <div class="media-body" style="color:#fff;">
                        <h5 class="mt-0 mb-1 card-title">Editar Historial medico</h5>
                        <p class="card-category">Ingrese los datos para Modificar el historial medico</p>
                      </div>
                      <img src="{{asset('imagenes/historial.jpg')}}" class="img-fluid rounded-circle" style="width:90px;" >
                    </div>
                  </div>
                  <div class="card-body" style="background-color:#71AFC8;">
                    <form class="form-group" action="{{route('attention.update',$attention->id)}}" method="POST" enctype="multipart/form-data">
                      @method ('PUT')
                      @csrf
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label>Diente</label>
                          <input type="text" class="form-control" name="tooth" value="{{$attention->tooth}}">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label>Descripcion</label>
                          <input type="text" class="form-control" name="description" value="{{$attention->description}}">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="">Paciente</label>
                          <select class="form-control" name="patient_id">
                            <option>{{$attention->patient->last_name.' '.$attention->patient->name}}</option>
                            @foreach ($patients as $patient)
                              <option value="{{$attention->patient_id}}">{{$patient->last_name}} {{$patient->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="">Tratamiento</label>
                          <select class="form-control" name="treatment_id">
                            <option value="">{{$attention->treatment->name}}</option>
                            @foreach ($treatments as $treatment)
                              <option value="{{$treatment['id']}}">{{$treatment->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <center><button type="submit" onclick="return confirm('Seguro que quiere Modificar los datos del Historial Médico?');" class="btn btn-success"><i class="far fa-edit"></i> Actualizar</button>
                      <a href="{{url('/attention')}}" class="btn btn-danger"><i class="fas fa-ban"></i> Cancelar</a>
                      </center></form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endsection()
