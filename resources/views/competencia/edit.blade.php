@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{ url('/competencia/'.$competencia->id) }}" method="post" enctype="multipart/form-data">
{{ @csrf_field() }}
{{ method_field('PATCH') }}
@include('competencia.form', ['modo'=>'Actualizar']);
</form>
</div>
@endsection