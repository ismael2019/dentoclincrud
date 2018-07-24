@extends('layouts.app2')

@section('content')
<div class="container" style="color:#ffffff;">

    <div class="alert alert-info alert-dismissible fade show" role="alert">
      <center><strong>Bienvenido {{ auth()->user()->name }}!</strong> acaba de iniciar sesion.</center>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class=" bg-primary alert alert-dark" role="alert" style="color:#ffffff;">
      <h4 class="alert-heading">{{ auth()->user()->name }}!</h4>
      <p>Como privilegios de Administrador puede realizar las siguientes operaciones:
        <div style="margin-left: 10%;">
                  <li>Registrar nuevos Usuarios con respectivos Roles.</li>
                  <li>Utilizar cualquiera de los sistemas.</li>
                  <li>Registrar Pacientes.</li>
                  <li>Eliminar Pacientes.</li>
                  <li>Modificar Pacientes.</li>
        </div>
      </p>
      <hr>
      <p class="mb-0">Recuerda Cerrar Sesion desde el menu.</p>
    </div>


</div>
@endsection
