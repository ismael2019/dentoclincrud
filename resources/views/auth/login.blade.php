@extends('layouts.app')

@section('content')
  <br>
  <br>
  <br>
  <br>
  <br>
<div class="container">
    <div class="row justify-content-center">
      <div class="card text-white bg-dark mb-12">
        <div class="card-header">Iniciar Sesion</div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label text-md-right">Correo Electronico</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuerdame
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Iniciar Sesion
                        </button>
                        <a type="button" class="btn btn-danger" href="{{ url('/') }}">
                            Cancelar
                        </a>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Olvido su Contraseña?
                        </a>
                    </div>
                </div>
            </form>
        </div>
      </div>

    </div>
</div>
@endsection
