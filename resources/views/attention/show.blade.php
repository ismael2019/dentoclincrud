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
                        <h5 class="mt-0 mb-1 card-title"><spam style="font-weight:bold;">Paciente: {{$attention->patient->name}} <br> Tratamiento: {{$attention->description}}</spam></h5>
                      </div>
                      <img src="{{asset('imagenes/historial.jpg')}}" class="img-fluid rounded-circle" style="width:100px; background-color:#ffffff;" >
                    </div>
                  </div>
                  <div class="card-body" style="background-color:#71AFC8;">
                    <div class="accordion" id="accordionExample">
                      <div class="card">
                        <div class="card-header" style="background-color:#27A3FF;" id="headingOne">
                          <h5 class="mb-0">
                            <button style="color:#ffffff;" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Detalle del Historial
                            </button>
                          </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-sm">
                               <tr>
                                  <th scope="col">Diente</th>
                                  <td>{{$attention->tooth}}</td>
                                </tr>
                                 <tr>
                                   <th scope="col">Descripcion</th>
                                   <td>{{$attention->description}}</td>
                                 </tr>
                                 <tr>
                                   <th scope="col">Paciente</th>
                                   <td>{{$attention->patient->name}}</td>
                                 </tr>
                                 <tr>
                                   <th scope="col">Tratamiento</th>
                                   <td>{{$attention->treatment->name}}</td>
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
