@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<h1 class="text-center">Persona</h1>

@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                        Crear nueva persona
                        </button>

                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-header" style="background-color: #4BD851;">
                                <h5 class="modal-title" id="exampleModalLabel">Crear una nueva cuneta</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" style="background-color: #fbedc3;">
                            @include('profile.create')
                            </div>
                            </div>
                        </div>
                        </div>
                        <form method="GET" action="{{ url('/puesto') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                    <tr style="background-color: #9c4848; color: #f2f4f6;">
                                        <th>N.</th>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Tipo</th>
                                        <th>Puesto</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($user as $item)
                                    <tr>
                                        <td>{{ $loop->iteration  }}</td>
                                        <td><img src="../uploads/avatars/{{ $item->avatar }}" width="40" height="40" class="rounded-circle"></td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->tipo }}</td>
                                        <td>{{ $item->puesto }}</td>
                                        <td>
                                        <a href="{{ url('/profile/' . $item->id . '/show') }}" title="Ver Puesto"><button class="btn btn-link btn-sm" style="background-color: #b7c730; color: #f2f4f6;"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                        <a href="{{ url('/profile/' . $item->id . '/edit') }}" title="Edit Puesto"><button class="btn btn-link btn-sm" style="background-color: #b7c730; color: #f2f4f6;"><i class="fa fa-edit" aria-hidden="true"></i></button></a>

                                            <form method="POST" action="{{ url('/profile' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Competencium" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </form>
                                @endforeach       
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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