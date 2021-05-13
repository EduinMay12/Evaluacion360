@extends('adminlte::page')

@section('title', 'Ver puesto')

@section('content_header')

<h1 class="text-center">{{ $puesto->nombre }}</h1>

@stop
@section('content')
    <style>
        .th-color{
            background-color: #682323;
            color: white;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                      <h3>{{$puesto->nombre }}</h3>
                    </div>
                    <div class="card-body">
                      <p><strong>Descripcion: </strong>{{ $puesto->descripcion }}</p>
                      <p><strong>Reporta a: </strong>{{ $puesto->reporta_a }}</p>
                      
                      <table class="table table-bordered">
                          <thead>
                              <tr class="th-color">
                                  <th>Competencia</th>
                                  <th>Nivel</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($puesto->competencias as $item)
                              <tr>
                                  <td>{{$item->nombre }}</td>
                                  @if ($item->pivot->nivel == 1)
                                   <td>Básico</td>
                                   @elseif($item->pivot->nivel == 2)
                                   <td>Calificado</td>
                                   @elseif($item->pivot->nivel == 3)
                                   <td>Experimentado</td>
                                  @endif
                                  
                              </tr>
                              @endforeach
                          </tbody>
                      </table><br>

                    <a href="{{ route('puestos.index') }}" class="btn btn-danger">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
