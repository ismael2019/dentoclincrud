@extends('layout.app')
@section('seleccionado9','seleccionado9')
@section('title','Historiales')
@section('content')
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header card-header-primary"  style="background-color:#007FB3;">
                    <div class="media">
                      <div class="media-body" style="color:#fff;">
                        <h5 class="mt-0 mb-1 card-title">Lista de Historiales medicos</h5>
                        <p class="card-category">lista de los Historiales medicos</p>
                      </div>
                      <img src="{{asset('imagenes/Reserva.png')}}" class="img-fluid" style="width:90px;" >
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive-xl">
                      <div class="row">
                        <div class="col-sm-6">
                          <h6>Hay {{$attentions->total()}} Historiales Registrados </h6>
                        </div>
                        </div>
                      <table class="table table-striped">
                        <thead style="color:#ffffff; background-color:#007FB3;">
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Diente</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Paciente</th>
                            <th scope="col">Tratamiento</th>
                            <th colspan="3">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($attentions as $attention)
                            <tr>
                              <td>{{$attention->id}}</td>
                              <td>{{$attention->tooth}}</td>
                              <td>{{$attention->description}}</td>
                              <td>{{$attention->patient->last_name.' '.$attention->patient->name}}</td>
                              <td>{{$attention->treatment->name}}</td>
                              <td>
                                <div class="btn-group d-flex" >
                                <a class="btn btn-info" href="{{route('attention.edit',$attention->id)}}"><i class="far fa-edit"> Editar</i></a>
                                <a class="btn btn-success"  href="{{route('attention.show',$attention->id)}}"><i class="far fa-eye"> Ver</i></a>
                                <form action="{{action('AttentionController@destroy', $attention['id'])}}"  method="post">
                                  @csrf
                                  <input name="_method" type="hidden" value="DELETE">
                                  <button class="btn btn-danger" onclick="return confirm('Seguro que quiere Eliminar los datos de la Historia Clínica?');" type="submit"><i class="far fa-trash-alt"> Borrar</i></button>
                                </form>
                                </div>

                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $attentions->render() !!}
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection()
