@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<style>
    .color {
        background-color: #4BD851;
        text-align: center;
        color: #000;
        font-size: 20px;
    }
</style>
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header color">Competencia numero {{ $competencium->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/competencia') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Volver</button></a>
                        <a href="{{ url('/competencia/' . $competencium->id . '/edit') }}" title="Edit Puesto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('competencia' . '/' . $competencium->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Puesto" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $competencium->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Nombre </th><td> {{ $competencium->nombre }} </td>
                                    </tr>
                                    <tr>
                                        <th> Descripcion </th><td> {{ $competencium->descripcion }} </td>
                                    </tr>
                                    <tr>
                                        <th>Nivel Basico</th><td>{{ $competencium->basicocorto1 }} <br> {{$competencium->basicocorto2 }} <br> {{ $competencium->basicocorto3 }} </td>
                                    </tr>
                                    <tr>
                                        <th>Nivel Calificado</th><td>{{ $competencium->calificadocorto1 }} <br> {{$competencium->calificadocorto2 }} <br> {{ $competencium->calificadocorto3 }} </td>
                                    </tr>
                                    <tr>
                                        <th>Nivel Experimentado</th><td>{{ $competencium->experimentadocorto1 }} <br> {{$competencium->experimentadocorto2 }} <br> {{ $competencium->experimentadocorto3 }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
