<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistema Dental</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="{{asset('css/admin/css/fontawesome-all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background:#eff0f4;">
    <div id="app">
        <nav class="navbar navbar-dark bg-primary navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand" href="./home">
                  <img src="{{asset('imagenes/admin.png')}}" style="width:20px; height:20px;">  {{ Auth::user()->name }}
                </a>


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <!--   <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>

                         <li class="nav-item">
                                <a class="nav-link" href="{{ route('register')  }}">{{ __('Register') }}</a>
                            </li> -->

                        @else
                          @if(Auth::user()->role == 'admin')

                            <a class="btn btn-primary" href="{{ url('/patient') }}">
                                {{ __('Sistema Dental') }}
                            </a>

                            <a class="btn btn-primary" href="{{ url('register') }}">
                                {{ __('Registrar Nuevo Usuario') }}
                            </a>

                            <a class="btn btn-primary" href="{{ url('users') }}">
                                {{ __('Lista de Usuarios') }}
                            </a>

                            <a class="btn btn-primary" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Cerrar Sesion') }}
                            </a>
                          @endif
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>


</html>
