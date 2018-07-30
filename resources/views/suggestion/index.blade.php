@extends('layout.app')

@section('title','Tratamiento Nuevo')
@section('seleccionado10','seleccionado10')

@section('content')
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header card-header-primary"  style="background-color:#007FB3;">
                    <div class="media">
                      <div class="media-body" style="color:#fff;">
                        <h5 class="mt-0 mb-1 card-title">Lista de Sugerencias</h5>
                        <p class="card-category">lista de las sugerencias por los pacientes</p>
                      </div>
                    <img src="{{asset('imagenes/informe.png')}}" class="img-fluid" style="width:100px;" >
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive-xl">
                      <div class="row">
                        <div class="col-sm-6">
                          <h6>Hay {{$suggestions->total()}} Sugerencias Registradas </h6>
                        </div>
                        </div>
                      <table class="table table-striped">
                        <thead style="color:#ffffff; background-color:#007FB3;">
                          <tr>
                            <th scope="col">Nombre Completo</th>
                            <th scope="col">Telefono</th>

                            <th colspan="2">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($suggestions as $suggestion)
                            <tr>
                              <td>{{$suggestion->full_name}}</td>
                              <td>{{$suggestion->cel}}</td>

                              <td>
                                <div class="btn-group d-flex" >
                                <a href="{{ route('suggestion.show', $suggestion->id)}}" class="btn btn-success"><i class="far fa-eye"> Mostrar</i></a>
                                <form action="{{action('SuggestionController@destroy', $suggestion['id'])}}"  method="post">
                                  @csrf
                                  <input name="_method" type="hidden" value="DELETE">
                                  <button class="btn btn-danger" onclick="return confirm('Seguro que quiere Eliminar la Sugerencia?');" type="submit"><i class="far fa-trash-alt"> Borrar</i></button>
                                </form>
                                </div>

                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $suggestions->render() !!}
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection()
