@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{ url('/competencia') }}" method="post" enctype="multipart/form-data">
{{ @csrf_field() }}
@include('competencia.form', ['modo'=>'Guardar']);
</form>
</div>
@endsection