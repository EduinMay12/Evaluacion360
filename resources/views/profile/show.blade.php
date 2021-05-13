@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<h1 class="text-center">Persona</h1>

@stop

@section('content')
            <div class="col-12">
                <div class="card card-profile shadow">
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5 btn btn-sm">
                                <img src="./uploads/avatars/{{ auth()->user()->avatar }}" width="300" height="300"class="rounded-circle">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="text-center">
                            <h3>
                                {{ auth()->user()->name }}
                            </h3><br>
                            <div class="h5 font-weight-300">
                                <i class="pin-3 mr-2"></i>{{ auth()->user()->email }}
                            </div>
                            <hr class="my-4" />
                            <h3>Puesto de la Persona</h3>
                            <br>
                            <p>{{ auth()->user()->puesto  }}</p>

                            <hr class="my-4" />
                            <h3>Tipo de la Persona</h3>
                            <br>
                            <button class="btn btn-primary">{{ auth()->user()->tipo }}</button>
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