@extends('layout.app')
@section('seleccionado7','seleccionado7')
@section('title','Recetas')
@section('content')
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header card-header-primary"  style="background-color:#007FB3;">
                    <div class="media">
                      <div class="media-body" style="color:#fff;">
                        <h5 class="mt-0 mb-1 card-title">Lista de Recetas medicas</h5>
                        <p class="card-category">lista de las recetas medicas</p>
                      </div>
                      <img src="{{asset('imagenes/medicamento.png')}}" class="img-fluid" style="width:90px;" >
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive-xl">
                      <table class="table table-striped">
                        <thead style="color:#ffffff; background-color:#007FB3;">
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre del Medicamento</th>
                            <th scope="col">Instrucciones</th>
                            <th scope="col">Paciente</th>
                            <th colspan="3">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($prescriptions as $prescription)
                            <tr>
                              <td>{{$prescription->id}}</td>
                              <td>{{$prescription->tittle}}</td>
                              <td>{{$prescription->detail}}</td>
                              <td>{{$prescription->patient->name}}</td>
                              <td>
                                <div class="btn-group d-flex" >
                                <a class="btn btn-info" href="{{route('prescription.edit',$prescription->id)}}"><i class="far fa-edit"> Editar</i></a>
                                <a class="btn btn-success"  href="{{route('prescription.show',$prescription->id)}}"><i class="far fa-eye"> Ver</i></a>
                                <form action="{{action('PrescriptionController@destroy', $prescription['id'])}}"  method="post">
                                  @csrf
                                  <input name="_method" type="hidden" value="DELETE">
                                  <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"> Borrar</i></button>
                                </form>
                                </div>

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
