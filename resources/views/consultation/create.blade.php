@extends('layout.app')

@section('title','Paciente Nuevo')
@section('seleccionado2','seleccionado2')
@section('texto1','Crear Nuevo Cita')
@section('texto2','Ingrese los datos del paciente para registrarlo')
@section('content')
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header card-header-primary"  style="background-color:#007FB3;">
                    <div class="media">
                      <div class="media-body" style="color:#fff;">
                        <h5 class="mt-0 mb-1 card-title">Registrar nueva cita medica</h5>
                        <p class="card-category">Ingrese los datos para registrar nueva cita</p>
                      </div>
                      <img src="{{asset('imagenes/Reserva.png')}}" class="img-fluid" style="width:90px;" >
                    </div>
                  </div>
                  <div class="card-body" style="background-color:#71AFC8;">
                    <form class="form-group" action="/consultation" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label>Diagnostico</label>
                          <input type="text" class="form-control" name="diagnosis">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Fecha Inicio</label>
                                <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                    <input name="start_date" type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                                    <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fas fa-calendar-plus"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker({
                    locale: 'es'
                });
            });
        </script>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Fecha Final</label>
                                <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                                    <input name="end_date" type="text" class="form-control datetimepicker-input" data-target="#datetimepicker2"/>
                                    <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fas fa-calendar-times"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $(function () {
                                $('#datetimepicker2').datetimepicker();
                            });
                        </script>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="">Paciente</label>
                          <select class="form-control" name="patient_id">
                            <option value="">--Seleccione al Paciente--</option>
                            @foreach ($patients as $patient)
                              <option value="{{$patient['id']}}">{{$patient->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <center><button type="submit" class="btn btn-primary" id="fondo"><i class="fas fa-user-clock"></i> Reservar</button></center>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endsection()
