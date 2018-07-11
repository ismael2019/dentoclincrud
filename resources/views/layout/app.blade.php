<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>DFVD - @yield('title') </title>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('css/admin/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{asset('css/admin/css/fontawesome-all.min.css')}}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{asset('css/admin/dataTables.bootstrap4.css')}}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{asset('css/admin/sb-admin.css')}}" rel="stylesheet">
  <link href="{{asset('css/datapicker/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color:#007FB3;" id="mainNav">
    <img src="{{asset('imagenes/lista.png')}}" style="height:40px; width:40px; position:relative;"><a class="navbar-brand" href="index.html" style="color:#ffffff; text-align: left;">DFVD</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="background-color:#007FB3;">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Registrar Paciente">
          <a class="nav-link active" id="@yield('seleccionado')" href="{{url('/patient/create')}}" >
            <i class="fas fa-user-circle" style="color: #ffffff; vertical-align:middle; "></i>
            <span class="nav-link-text" style=" color:#ffffff;">Registrar Paciente</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Lista de Pacientes">
          <a class="nav-link" id="@yield('seleccionado1')" href="{{url('/patient')}}">
            <i class="fas fa-users" style="color: #ffffff; vertical-align:middle; "></i>
            <span class="nav-link-text" style=" color:#ffffff;">Lista de Pacientes</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Registrar Cita">
          <a class="nav-link" id="@yield('seleccionado2')" href="{{url('/consultation/create')}}">
            <i class="fas fa-user-clock" style="color: #ffffff; vertical-align:middle; "></i>
            <span class="nav-link-text" style=" color:#ffffff;">Registrar Cita</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Lista de citas medicas">
          <a class="nav-link" id="@yield('seleccionado3')" href="{{url('/consultation')}}">
            <i class="fas fa-clock" style="color: #ffffff; vertical-align:middle; "></i>
            <span class="nav-link-text" style=" color:#ffffff;">Lista de citas medicas</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Lista de Pacientes">
          <a class="nav-link" id="@yield('seleccionado4')" href="{{url('/treatment/create')}}">
            <i class="fas fa-briefcase-medical" style="color: #ffffff; vertical-align:middle; "></i>
            <span class="nav-link-text" style=" color:#ffffff;">Registrar Tratamientos</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Lista de Pacientes">
          <a class="nav-link" id="@yield('seleccionado5')" href="{{url('/treatment')}}">
            <i class="fas fa-notes-medical" style="color: #ffffff; vertical-align:middle; "></i>
            <span class="nav-link-text" style=" color:#ffffff;">Lista de Tratamientos</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Lista de Pacientes">
          <a class="nav-link" id="@yield('seleccionado6')" href="{{url('/prescription/create')}}">
            <i class="fas fa-envelope" style="color: #ffffff; vertical-align:middle; "></i>
            <span class="nav-link-text" style=" color:#ffffff;">Registrar Receta</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Lista de Pacientes">
          <a class="nav-link" id="@yield('seleccionado7')" href="{{url('/prescription')}}">
            <i class="fas fa-clipboard-list" style="color: #ffffff; vertical-align:middle; "></i>
            <span class="nav-link-text" style=" color:#ffffff;">Lista de Recetas</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Lista de Pacientes">
          <a class="nav-link" id="@yield('seleccionado8')" href="{{url('/attention/create')}}">
            <i class="fas fa-clipboard" style="color: #ffffff; vertical-align:middle; "></i>
            <span class="nav-link-text" style=" color:#ffffff;">Registrar Historial</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Lista de Pacientes">
          <a class="nav-link" id="@yield('seleccionado9')" href="{{url('/attention')}}">
            <i class="fas fa-clipboard-check" style="color: #ffffff; vertical-align:middle; "></i>
            <span class="nav-link-text" style=" color:#ffffff;">Lista de Historiales</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler" style="background-color: #007FB3">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
      <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-danger" data-toggle="modal" data-target="#exampleModal" style="color:#ffffff;">
            <i class="fas fa-sign-out-alt"></i>Cerrar Sesion</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper" style="background-color:#68A9C4;" >

    @if(Session::has('message'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong>Notifacion!</strong> {{ Session::get('message') }}
      </div>
    @endif
    @if(Session::has('edit'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong>Notifacion!</strong> {{ Session::get('edit') }}
      </div>
    @endif

    @if(Session::has('del'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong>Notifacion!</strong> {{ Session::get('del') }}
      </div>
    @endif

      <div class="content">
        @yield('content')
      </div>

    <footer class="sticky-footer" style="color:#ffffff; background-color: #007FB3">
      <div class="container">
        <div class="text-center">
          <small>Clinica dental DFVD 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{ auth()->user()->name }} quiere Cerrar Sesion?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Haga click en el botton Cerrar Sesion para salir.</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-success" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Cerrar Sesion') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('js/admin/jquery.min.js')}}"></script>
    <script src="{{asset('js/datapicker/moment.js')}}"></script>
    <script src="{{asset('js/datapicker/es.js')}}"></script>
    <script src="{{asset('js/datapicker/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{asset('js/admin/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset('js/admin/jquery.easing.min.js')}}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{asset('js/admin/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('js/admin/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('js/admin/datatables/dataTables.bootstrap4.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/admin/sb-admin.min.js')}}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{asset('js/admin/sb-admin-datatables.min.js')}}"></script>
    <script src="{{asset('js/admin/sb-admin-charts.min.js')}}"></script>
  </div>
</body>

</html>
