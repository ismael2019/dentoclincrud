@extends('layout.app')
@section('seleccionado5','seleccionado5')
@section('title','Tratamientos')
@section('content')
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header card-header-primary"  style="background-color:#007FB3;">
                    <div class="media">
                      <div class="media-body" style="color:#fff;">
                        <h5 class="mt-0 mb-1 card-title">Lista de Tratamientos medicos</h5>
                        <p class="card-category">lista de los tratamientos medicos</p>
                      </div>
                      <img src="{{asset('imagenes/tratamiento.jpg')}}" class="img-fluid rounded-circle" style="width:90px;" >
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive-xl">
                      <table class="table table-striped">
                        <thead style="color:#ffffff; background-color:#007FB3;">
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Tratamiento</th>
                            <th colspan="3">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($treatments as $treatment)
                            <tr>
                              <td>{{$treatment->id}}</td>
                              <td>{{$treatment->name}}</td>
                              <td>
                                <div class="btn-group d-flex" >
                                <a class="btn btn-info" href="{{route('treatment.edit',$treatment->id)}}"><i class="far fa-edit"> Editar</i></a>
                                <form action="{{action('TreatmentController@destroy', $treatment['id'])}}"  method="post">
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
