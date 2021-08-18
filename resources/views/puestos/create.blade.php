@extends('adminlte::page')

@section('title', 'Crear Puesto')

@section('content_header')

<h1 class="text-center">Crear Puesto</h1>

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

                        <form method="POST" action="{{ route('puestos.store') }}" accept-charset="UTF-8" class="form-horizontal">
                            @csrf
                            <label for="">Nombre del Puesto*</label>
                            <input type="text" name="nombre" class="form-control">

                            <label for="">Descripción</label>
                            <input type="text" name="descripcion" class="form-control">

                            <label for="">Puesto a quien reporta</label>
                            <select name="reporta_a" class="form-control">
                                <option value="">Seleccione...</option>
                                @foreach ($puestos as $puesto)
                                <option value="{{ $puesto->nombre }}">{{ $puesto->nombre }}</option>
                                @endforeach
                            </select><br>
                            <button class="btn btn-success">Guardar</button>
                            <a href="{{ route('puestos.index') }}" class="btn btn-danger">Volver</a>
                        </form>
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