@extends('layout.app')

@section('title','Pacientes')
@section('seleccionado1','seleccionado1')
@section('content')
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header card-header-primary"  style="background-color:#007FB3;">
                    <div class="media">
                      <div class="media-body" style="color:#fff;">
                        <h5 class="mt-0 mb-1 card-title">Lista de Pacientes</h5>
                        <p class="card-category">lista de todos los pacientes registrados</p>
                      </div>
                      <img src="{{asset('imagenes/Pacientes.png')}}" class="img-fluid" style="width:90px;" >
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive-xl">

                      <div class="row">
                        <div class="col-sm-6">
                          <h6>Hay {{$patients->total()}} Pacientes Registrados </h6>
                        </div>
                        <div class="col-sm-6">
                          <form  method="GET" action="{{route('patient.index')}}">
                              <div class="input-group">
                                <input class="form-control" type="text" name="name" placeholder="Busqueda">
                                <span class="input-group-append">
                                  <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search"></i>
                                  </button>
                                </span>
                              </div>
                          </form>
                        </div>
                      </div>
                      <br>
                      <table class="table table-striped">
                        <thead style="color:#ffffff; background-color:#007FB3;">
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Cedula de identidad</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Ciudad</th>
                            <th colspan="3">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($patients as $patient)
                            <tr>
                              <td scope="row">{{$patient->id}}</td>
                              <td>{{$patient->c_i}}</td>
                              <td>{{$patient->name}}</td>
                              <td>{{$patient->last_name}}</td>
                              <td>{{$patient->age}}</td>
                              <td>{{$patient->gender}}</td>
                              <td>{{$patient->email}}</td>
                              <td>{{$patient->phone}}</td>
                              <td>{{$patient->city}}</td>
                              <td>
                                <div class="btn-group d-flex" >
                                <a class="btn btn-info" href="{{ route('patient.edit', $patient->id)}}"><i class="far fa-edit"> Editar</i></a><br>
                                <a href="{{ route('patient.show', $patient->id)}}" class="btn btn-success"><i class="far fa-eye"> Mostrar</i></a>
                                <form action="{{action('PatientController@destroy', $patient['id'])}}"  method="post">
                                  @csrf
                                  <input name="_method" type="hidden" value="DELETE">
                                  <button class="btn btn-danger" type="submit"  onclick="return confirm('Seguro que quiere Eliminar al Paciente?');"><i class="far fa-trash-alt"> Delete</i></button>
                                </form>
                              </div>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $patients->render() !!}
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection()
