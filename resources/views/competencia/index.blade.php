@extends('layouts.app')

@section('content')
<div class="container">
        @if(Session::has('mensaje'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ Session::get('mensaje') }}
        <button class="close" type="button" data-dismiss="alert" arial-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
         @endif
<style>
    .mov {
        background-color: #8A0D48;
        border: none;
    }
    table thead {
        background-color: #8A0D48;
    }
    table, thead, tr, th {
        border: 1px solid #fff;
        color: #fff;
    }
    table, tbody, tr, td {
        border: 0.5px solid #000;
        color: #000;
    }

</style>
<center><h2>Competencias</h2></center>

<center><a href="{{ url('competencia/create') }}" class="btn btn-success mov" >Crear Competencia</a></center>

<br>
<form class="d-flex float-right">
    <input name="buscador" class="form-control mr-sm2" type="search" placeholder="Search" aria-label="Search" value="">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>
<br>
<table class="table">
    <thead>
        <tr>
            <th >#</th>
            <th >Nombre</th>
            <th >Basico(Conoce,Comprende y Analiza)</th>
            <th >Calificado(Evalua, Aplica y Adapta)</th>
            <th >Experimentado(Mejora, Enseña y Guia)</th>
            <th >Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($competencias as $competencia)
        <tr>
            <td>{{ $competencia->id }}</td>
            <td>{{ $competencia->NombreCompetencia }}</td>
            <td>{{ $competencia->AccionCorta1 }}</td>
            <td>{{ $competencia->AccionCorta_1 }}</td>
            <td>{{ $competencia->AccionCorta__1 }}</td>
            <td span="2">
            <a href="" class="btn btn-primary" style="background-color: #cebd5a; outline: none; border: none;">Ver</a> | 
            <a href="{{ url('/competencia/'.$competencia->id.'/edit') }}" style="background-color: #cebd5a; outline: none; border: none;" class="btn btn-warning"><i class="material-icons">edit</i></a> | 
                <form action="{{ url('/competencia/'.$competencia->id) }}" class="d-inline" method="post">
                    {{ @csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input style="background-color: #8A0D48; outline: none; border: none;" class="btn btn-danger" type="submit" onclick="return confirm('Estas seguro de borrar este registro')" value="Borrar">
                </form>
            </td>
        </tr>
    @endforeach 
    </tbody>
</table>
{!! $competencias->links() !!}
</div>
@endsection