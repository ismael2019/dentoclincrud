@extends('layouts.app2')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header bg-primary" style="color:#ffffff;">{{ __('Usuarios') }}</div>

                  <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                          <h6>Hay {{$users->total()}} Usuarios Registrados </h6>
                        </div>
                        <div class="col-sm-6">
                          <form  method="GET" action="{{route('users.index')}}">
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
                    <div class="table-responsive-xl">
                      <br>
                      <table class="table table-striped">
                        <thead style="color:#ffffff; background-color:#007FB3;">
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Contraseña</th>
                            <th colspan="1">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($users as $user)
                            <tr>
                              <td scope="row">{{$user->id}}</td>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td>{{$user->role}}</td>
                              <td>{{$user->password}}</td>
                              <td>
                                <div class="btn-group d-flex" >
                                <form action="{{action('UsersController@destroy', $user['id'])}}"  method="post">
                                  @csrf
                                  <input name="_method" type="hidden" value="DELETE">
                                  <button class="btn btn-danger" onclick="return confirm('Seguro que quiere Eliminar los datos de la Receta Médica?');" type="submit"><i class="far fa-trash-alt"> Borrar</i></button>
                                </form>
                                </div>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $users->render() !!}
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
