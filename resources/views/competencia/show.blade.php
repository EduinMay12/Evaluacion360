@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<style>


</style>
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Numero {{ $competencium->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/competencia') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/competencia/' . $competencium->id . '/edit') }}" title="Edit Puesto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('competencia' . '/' . $competencium->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Puesto" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $competencium->id }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $competencium->nombre }} </td></tr><tr><th> Descripcion </th><td> {{ $competencium->descripcion }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
