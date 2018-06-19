@extends('layout.app')

@section('title','Detalle')
@section('content')
  @section('seleccionado3','seleccionado3')
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header card-header-primary"  style="background-color:#007FB3">
                    <div class="media">
                      <div class="media-body" style="color:#fff;">
                        <h5 class="mt-0 mb-1 card-title"><spam style="font-weight:bold;">{{$patient->name}} {{$patient->last_name}}</spam></h5>
                        <p class="card-category">Aqui podra encontrar datos principales del paciente, consultas del paciente, recetas medicas del paciente</p>
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
                              Datos Principales del Paciente
                            </button>
                          </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-sm">
                               <tr>
                                  <th scope="col">Cedula de identidad</th>
                                  <td>{{$patient->c_i}}</td>
                                </tr>
                                 <tr>
                                   <th scope="col">Nombre</th>
                                   <td>{{$patient->name}}</td>
                                 </tr>
                                 <tr>
                                   <th scope="col">Apellido</th>
                                   <td>{{$patient->last_name}}</td>
                                 </tr>
                                 <tr>
                                    <th scope="col">Edad</th>
                                    <td>{{$patient->age}}</td>
                                  </tr>
                                 <tr>
                                    <th scope="col">Genero</th>
                                    <td>{{$patient->gender}}</td>
                                 </tr>
                                 <tr>
                                    <th scope="col">Email</th>
                                    <td>{{$patient->email}}</td>
                                 </tr>
                                 <tr>
                                    <th scope="col">Telefono</th>
                                    <td>{{$patient->phone}}</td>
                                 </tr>
                                 <tr>
                                  <th scope="col">Ciudad</th>
                                  <td>{{$patient->city}}</td>
                                </tr>
                            </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" style="background-color:#0B9F80;" id="headingTwo">
                          <h5 class="mb-0">
                            <button style="color:#ffffff;" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Consultas del paciente
                            </button>
                          </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" style="background-color:#00A726;" id="headingThree">
                          <h5 class="mb-0">
                            <button style="color:#ffffff;" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Recetas medicas del paciente
                            </button>
                          </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
