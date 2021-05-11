<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($puesto->nombre) ? $puesto->nombre : ''}}" reired>
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <input class="form-control" name="descripcion" type="text" id="descripcion" value="{{ isset($puesto->descripcion) ? $puesto->descripcion : ''}}" >
    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('puesto') ? 'has-error' : ''}}">
    <label for="puesto" class="control-label">{{ 'Puesto' }}</label>
    <input class="form-control" name="puesto" type="text" id="puesto" value="{{ isset($puesto->puesto) ? $puesto->puesto : ''}}" >
    {!! $errors->first('puesto', '<p class="help-block">:message</p>') !!}
</div>
<br>
<br>
@include ('nivel.form', ['formMode' => 'create'])
<br>
<br>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Guardar' }}">
    <a href="{{ url('/puesto') }}" title="Back"><button class="btn btn-warning">Volver</button></a>
</div>
