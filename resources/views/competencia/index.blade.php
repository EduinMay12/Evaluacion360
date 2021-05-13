@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<h1 class="text-center">Competencia</h1>

@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Crear Competencia</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            @include('competencia.create')
                            </div>
                            </div>
                        </div>
                        </div>
                        <form method="GET" action="{{ url('/competencia') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nombre</th>
                                        <th> Básico<br>(Conoce, comprende y ejecuta)</th>
                                        <th> Calificado<br>(Evalúa, aplica y adapta)</th>
                                        <th> Experimentado<br>(Mejora, enseña y guia)</th>
                                        <th> </th>
                                        <th> </th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($competencia as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nombre }}</td>
                                        <td>{{ $item->basicocorto1 }}<br/><br/>{{ $item->basicocorto2 }}<br/><br/>{{ $item->basicocorto3 }}<br/></td>
                                        <td>{{ $item->calificadocorto1 }}<br/><br/>{{ $item->calificadocorto2 }}<br/><br/>{{ $item->calificadocorto3 }}<br/></td>
                                        <td>{{ $item->experimentadocorto1 }}<br/><br/>{{ $item->experimentadocorto2 }}<br/><br/>{{ $item->experimentadocorto3 }}<br/></td>
                                        <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal1">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade bd-example-modal-lg" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Detalles de la Competencia </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </td>
                                        <td>
                                        <a href="{{ url('/competencia/' . $item->id . '/edit') }}" title="Edit Puesto"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></button></a>
                                        </td>
                                        <td>                               
                                            <form method="POST" action="{{ url('/competencia' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Competencium" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
            <div class="pagination"> {!! $competencia->appends(['search' => Request::get('search')])->render() !!} </div>
        </div>
    </div>
    @stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop