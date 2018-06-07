@extends('layout.app')

@section('title','Pacientes')
@section('content')
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header card-header-primary"  style="background-color:#27A3FF;">
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
                      <table class="table table-striped">
                        <thead style="color:#ffffff; background-color:#019BB9;">
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
                              <td><a style="margin:2px; width:90px;" class="btn btn-info" href="/patient/{{$patient->id}}/edit"><i class="far fa-edit"> Editar</i></a><br>
                                <a style="margin:2px; width:90px;" class="btn btn-success"  href="/patient/{{$patient->id}}"><i class="far fa-eye"> Mostrar</i></a>
                                <form action="{{action('PatientController@destroy', $patient['id'])}}"  method="post">
                                  @csrf
                                  <input name="_method" type="hidden" value="DELETE">
                                  <button style="margin:2px; width:90px;" class="btn btn-danger" type="submit"><i class="far fa-trash-alt"> Delete</i></button>
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection()
