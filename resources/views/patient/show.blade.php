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
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                              <button style="color:#ffffff;" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Consultas del paciente
                              </button>

                              </div>
                              <div class="float-right"><button type="button" style="color:#ffffff;" class="btn btn-link" data-toggle="modal" data-target="#exampleModalCenter">
                                Registrar Nuevo Historial
                              </button></div>
                          </h5>

                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
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
                                                        <input type="hidden" class="form-control" name="patient_id" value="{{$patient->id}}">
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
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-success">Registrar</button>
                              </div>
                            </div>
                          </div>
                        </div>







                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                          <div class="card-body">
                            @foreach($consultas as $consul)
                            <div class="table-responsive">
                            <table class="table table-sm" id="tabla" >
                               <tr>
                                  <th scope="col">Consulta de la Fecha:</th>
                                  <td>{{$consul->created_at}}</td>
                                </tr>
                                <tr>
                                   <th scope="col">Diente</th>
                                   <td>{{$consul->tooth}}</td>
                                 </tr>
                                 <tr>
                                   <th scope="col">Descripcion</th>
                                   <td>{{$consul->description}}</td>
                                 </tr>
                                 <tr>
                                   <th scope="col">Tratamiento</th>
                                   <td>{{$consul->name}}</td>
                                 </tr>
                                 <hr>
                               </table>
                            </div>
                            @endforeach

                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" style="background-color:#00A726;" id="headingThree">
                          <h5 class="mb-0">
                            <button style="color:#ffffff;" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Recetas medicas del paciente
                            </button>
                            <div class="float-right"><button type="button" style="color:#ffffff;"  class="btn btn-link" data-toggle="modal" data-target="#exampleModalCenter1">
                              Registrar Receta Medica
                            </button></div>
                          </h5>
                        </div>


                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header card-header-primary"  style="background-color:#007FB3;">
                                                  <div class="media">
                                                    <div class="media-body" style="color:#fff;">
                                                      <h5 class="mt-0 mb-1 card-title">Registrar nueva Receta Medica</h5>
                                                      <p class="card-category">Ingrese el nombre de la receta medica y las instrucciones de consumo</p>
                                                    </div>
                                                    <img src="{{asset('imagenes/medicamento.png')}}" class="img-fluid rounded-circle" style="width:90px;" >
                                                  </div>
                                                </div>
                                                <div class="card-body" style="background-color:#71AFC8;">
                                                  <form class="form-group" action="{{route('prescription.store')}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-row">
                                                      <div class="form-group col-md-12">
                                                        <label>Nombre del Medicamento</label>
                                                        <input type="text" class="form-control" name="tittle">
                                                      </div>
                                                    </div>
                                                    <div class="form-row">
                                                      <div class="form-group col-md-12">
                                                        <label for="exampleTextarea">Instrucciones de Consumo</label>
                                                        <textarea class="form-control" id="exampleTextarea" rows="3" name="detail"></textarea>
                                                      </div>
                                                    </div>
                                                    <div class="form-row">
                                                      <div class="form-group col-md-12">
                                                        <input type="hidden" class="form-control" name="patient_id" value="{{$patient->id}}">
                                                      </div>
                                                    </div>
                                                    <center><button type="submit" class="btn btn-primary" id="fondo"><i class="fas fa-clipboard-check"></i> Registrar</button></center>
                                                  </form>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-success">Registrar</button>
                              </div>
                            </div>
                          </div>
                        </div>







                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                          <div class="card-body">
                            @foreach($recetas as $rece)
                            <div class="table-responsive">
                            <table class="table table-sm">
                               <tr>
                                  <th scope="col">Receta de la Fecha:</th>
                                  <td>{{$rece->created_at}}</td>
                                </tr>
                                <tr>
                                   <th scope="col">Medicamento</th>
                                   <td>{{$rece->tittle}}</td>
                                 </tr>
                                 <tr>
                                   <th scope="col">Detalle</th>
                                   <td>{{$rece->detail}}</td>
                                 </tr>
                                 <hr>
                               </table>

                            </div>
                            @endforeach
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
