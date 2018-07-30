@extends('layout.app')

@section('title','Receta Medica')

@section('content')
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header card-header-primary"  style="background-color:#007FB3;">
                    <div class="media">
                      <div class="media-body" style="color:#fff;">
                        <h5 class="mt-0 mb-1 card-title">Registrar nueva Receta Medica</h5>
                        <p class="card-category">Ingrese el nombre de la receta medica y las instrucciones de consumo</p>
                      </div>
                      <img src="{{asset('imagenes/Reserva.png')}}" class="img-fluid" style="width:90px;" >
                    </div>
                  </div>
                  <div class="card-body" style="background-color:#71AFC8;">
                    <form class="form-group" action="{{ route('prescription.update', $prescription->id)}}" method="POST" enctype="multipart/form-data">
                      @method ('PUT')
                      @csrf
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label>Nombre del Medicamento</label>
                          <input type="text" class="form-control" name="tittle" value="{{$prescription->tittle}}">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="exampleTextarea">Instrucciones de Consumo</label>
                          <input class="form-control" id="exampleTextarea" rows="3" name="detail" value="{{$prescription->detail}}"></input>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="">Paciente</label>
                          <select class="form-control" name="patient_id">
                            <option>{{$prescription->patient->last_name.' '.$prescription->patient->name}}</option>
                            @foreach ($patients as $patient)
                              <option value="{{$patient['id']}}">{{$patient->last_name}} {{$patient->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <center><button type="submit" onclick="return confirm('Seguro que quiere Modificar los datos de la Receta Médica?');" class="btn btn-primary" id="fondo"><i class="fas fa-clipboard-check"></i> Modificar</button></center>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endsection()
