@extends('layout.app')

@section('title','Detalle')
@section('content')
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header card-header-primary"  style="background-color:#007FB3">
                    <div class="media">
                      <div class="media-body" style="color:#fff;">
                        <h5 class="mt-0 mb-1 card-title"><spam style="font-weight:bold;">Cita: {{$consultation->diagnosis}} {{$consultation->start_date}}</spam></h5>
                        <p class="card-category">Aqui podra encontrar detalles de la cita medica</p>
                      </div>
                      <img src="{{asset('imagenes/ver.png')}}" class="img-fluid rounded-circle" style="width:100px; background-color:#ffffff;" >
                    </div>
                  </div>
                  <div class="card-body" style="background-color:#71AFC8;">
                    <div class="accordion" id="accordionExample">
                      <div class="card">
                        <div class="card-header" style="background-color:#27A3FF;" id="headingOne">
                          <h5 class="mb-0">
                            <button style="color:#ffffff;" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Detalle de la Cita
                            </button>
                          </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-sm">
                               <tr>
                                  <th scope="col">Diagnostico</th>
                                  <td>{{$consultation->diagnosis}}</td>
                                </tr>
                                 <tr>
                                   <th scope="col">Fecha Inicio</th>
                                   <td>{{$consultation->start_date}}</td>
                                 </tr>
                                 <tr>
                                   <th scope="col">Fecha Final</th>
                                   <td>{{$consultation->end_date}}</td>
                                 </tr>
                                 <tr>
                                   <th scope="col">Paciente</th>
                                   <td>{{$consultation->patient->name}}</td>
                                 </tr>
                            </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection()
