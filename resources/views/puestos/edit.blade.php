@extends('adminlte::page')

@section('title', 'Crear Puesto')

@section('content_header')

<h1 class="text-center">Editar Puesto</h1>

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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ route('puestos.update', $puesto) }}" accept-charset="UTF-8" class="form-horizontal">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success">Guardar</button>
                            <a href="{{ route('puestos.index') }}" class="btn btn-danger">Volver</a><br><br>
                            <label for="">Nombre del Puesto*</label>
                            <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $puesto->nombre) }}">

                            <label for="">Descripción</label>
                            <input type="text" name="descripcion" class="form-control" value="{{ old('descripcion', $puesto->descripcion) }}">

                            <label for="">Puesto a quien reporta</label>
                            <select name="reporta a" class="form-control">
                                <option value="">Seleccione...</option>
                               @foreach ($puestos as $item)
                               <option value="{{ $item->nombre }}">{{ $item->nombre }}</option>
                               @endforeach
                            </select>
                        </form>

                        <form action="{{ route('puesto-competencia.guardar_cp', $puesto) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <label for="">Competencia</label>
                                    <select name="competencia" class="form-control"> 
                                        <option value="">Seleccione...</option>
                                        @foreach ($competencias as $competencia)
                                        <option value="{{ $competencia->id }}">{{ $competencia->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-4">
                                    <br>
                                    <div class="form-check form-check-inline position-bottom">
                                        <input class="form-check-input" type="radio" name="nivel" value="1">
                                        <label class="form-check-label" for="inlineRadio1">Básico</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="nivel" value="2">
                                        <label class="form-check-label" for="inlineRadio2">Calificado</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="nivel" value="3">
                                        <label class="form-check-label" for="inlineRadio3">Experimentado</label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <br>
                                    <button class="btn btn-light" type="submit">Agregar</button>
                                </div>
                            </div><br>
                        </form>
                        
                        
                        <div class="row">
                            <div class="col-6">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="th-color">
                                            <th>Competencia</th>
                                            <th>Nivel</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $puesto->competencias as $compe)
                                        <tr>
                                            <td>{{ $compe->nombre }}</td>
                                            <td>{{ $compe->pivot->nivel }}</td>
                                            <td>
                                                <form action="{{ route('puesto-competencia.eliminar_cp', $puesto) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                </form>
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
    </div>
    @stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop