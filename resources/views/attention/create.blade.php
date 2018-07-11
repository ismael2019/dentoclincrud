@extends('layout.app')

@section('title','Historial Medico Nuevo')
@section('seleccionado8','seleccionado8')
@section('content')
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header card-header-primary"  style="background-color:#007FB3;">
                    <div class="media">
                      <div class="media-body" style="color:#fff;">
                        <h5 class="mt-0 mb-1 card-title">Registrar nuevo Historial medico</h5>
                        <p class="card-category">Ingrese los datos para registrar el historial medico</p>
                      </div>
                      <img src="{{asset('imagenes/historial.jpg')}}" class="img-fluid rounded-circle" style="width:90px;" >
                    </div>
                  </div>
                  <div class="card-body" style="background-color:#71AFC8;">
                    <form class="form-group" action="{{ route('attention.store')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label>Diente</label>
                          <input type="text" class="form-control" name="tooth">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label>Descripcion</label>
                          <input type="text" class="form-control" name="description">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="">Paciente</label>
                          <select class="form-control" name="patient_id">
                            <option value="">--Seleccione al Paciente--</option>
                            @foreach ($patients as $patient)
                              <option value="{{$patient['id']}}">{{$patient->last_name}} {{$patient->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="">Tratamiento</label>
                          <select class="form-control" name="treatment_id">
                            <option value="">--Seleccione el Tratamiento--</option>
                            @foreach ($treatments as $treatment)
                              <option value="{{$treatment['id']}}">{{$treatment->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <center><button type="submit" class="btn btn-primary" id="fondo"><i class="fas fa-clipboard-check"></i> Registrar</button></center>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endsection()
