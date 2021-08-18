<div class="form-group"> 
    <div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
        <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
        <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($competencium->nombre) ? $competencium->nombre : ''}}" required>
        {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
        <label for="descripcion" class="control-label">{{ 'Descripcion' }}</label>
        <input class="form-control" name="descripcion" type="text" id="descripcion" value="{{ isset($competencium->descripcion) ? $competencium->descripcion : ''}}" required>
        {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
    </div>
    <br>
    <h1 class="text-center">Nivel Basico</h1>
    <br>
        <div class="row">
            <div class="col {{ $errors->has('basicocorto1') ? 'has-error' : ''}}">
                <label for="basicocorto1" class="control-label">{{ 'Basico corto 1*' }}</label>
                <input class="form-control" name="basicocorto1" type="text" id="basicocorto1" value="{{ isset($competencium->basicocorto1) ? $competencium->basicocorto1 : ''}}" required>
                {!! $errors->first('basicocorto1', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="col {{ $errors->has('basicocorto2') ? 'has-error' : ''}}">
                <label for="basicocorto2" class="control-label">{{ 'Basico corto 2*' }}</label>
                <input class="form-control" name="basicocorto2" type="text" id="basicocorto2" value="{{ isset($competencium->basicocorto2) ? $competencium->basicocorto2 : ''}}" required>
                {!! $errors->first('basicocorto2', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="col {{ $errors->has('basicocorto3') ? 'has-error' : ''}}">
                <label for="basicocorto3" class="control-label">{{ 'Basico corto 3*' }}</label>
                <input class="form-control" name="basicocorto3" type="text" id="basicocorto3" value="{{ isset($competencium->basicocorto3) ? $competencium->basicocorto3 : ''}}" required>
                {!! $errors->first('basicocorto3', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    <br>
        <div class="row">
            <div class="col {{ $errors->has('basicoaccion1') ? 'has-error' : ''}}">
                <label for="basicoaccion1" class="control-label">{{ 'Accion 1' }}</label>
                <input class="form-control" name="basicoaccion1" type="text" id="basicoaccion1" value="{{ isset($competencium->basicoaccion1) ? $competencium->basicoaccion1 : ''}}" required>
                {!! $errors->first('basicoaccion1', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="col {{ $errors->has('basicoaccion2') ? 'has-error' : ''}}">
                <label for="basicoaccion2" class="control-label">{{ 'Accion 2' }}</label>
                <input class="form-control" name="basicoaccion2" type="text" id="basicoaccion2" value="{{ isset($competencium->basicoaccion2) ? $competencium->basicoaccion2 : ''}}" required>
                {!! $errors->first('basicoaccion2', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="col {{ $errors->has('basicoaccion3') ? 'has-error' : ''}}">
                <label for="basicoaccion3" class="control-label">{{ 'Accion 3' }}</label>
                <input class="form-control" name="basicoaccion3" type="text" id="basicoaccion3" value="{{ isset($competencium->basicoaccion3) ? $competencium->basicoaccion3 : ''}}" required>
                {!! $errors->first('basicoaccion3', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    <br>
    <h1 class="text-center">Nivel Calificado</h1>
    <br>
        <div class="row">
            <div class="col {{ $errors->has('calificadocorto1') ? 'has-error' : ''}}">
                <label for="calificadocorto1" class="control-label">{{ 'Calificado corto 1*' }}</label>
                <input class="form-control" name="calificadocorto1" type="text" id="calificadocorto1" value="{{ isset($competencium->calificadocorto1) ? $competencium->calificadocorto1 : ''}}" required>
                {!! $errors->first('calificadocorto1', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="col {{ $errors->has('calificadocorto2') ? 'has-error' : ''}}">
                <label for="calificadocorto2" class="control-label">{{ 'Calificado corto 2*' }}</label>
                <input class="form-control" name="calificadocorto2" type="text" id="calificadocorto2" value="{{ isset($competencium->calificadocorto2) ? $competencium->calificadocorto2 : ''}}" required>
                {!! $errors->first('calificadocorto2', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="col {{ $errors->has('calificadocorto3') ? 'has-error' : ''}}">
                <label for="calificadocorto3" class="control-label">{{ 'Calificado corto 3*' }}</label>
                <input class="form-control" name="calificadocorto3" type="text" id="calificadocorto3" value="{{ isset($competencium->calificadocorto3) ? $competencium->calificadocorto3 : ''}}" required>
                {!! $errors->first('calificadocorto3', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    <br>
        <div class="row">
            <div class="col {{ $errors->has('calificadoaccion1') ? 'has-error' : ''}}">
                <label for="calificadoaccion1" class="control-label">{{ 'Accion 1' }}</label>
                <input class="form-control" name="calificadoaccion1" type="text" id="calificadoaccion1" value="{{ isset($competencium->calificadoaccion1) ? $competencium->calificadoaccion1 : ''}}" required>
                {!! $errors->first('calificadoaccion1', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="col {{ $errors->has('calificadoaccion2') ? 'has-error' : ''}}">
                <label for="calificadoaccion2" class="control-label">{{ 'Accion 2' }}</label>
                <input class="form-control" name="calificadoaccion2" type="text" id="calificadoaccion2" value="{{ isset($competencium->calificadoaccion2) ? $competencium->calificadoaccion2 : ''}}" required>
                {!! $errors->first('calificadoaccion2', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="col {{ $errors->has('calificadoaccion3') ? 'has-error' : ''}}">
                <label for="calificadoaccion3" class="control-label">{{ 'Accion 3' }}</label>
                <input class="form-control" name="calificadoaccion3" type="text" id="calificadoaccion3" value="{{ isset($competencium->calificadoaccion3) ? $competencium->calificadoaccion3 : ''}}" required>
                {!! $errors->first('calificadoaccion3', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    <br>
    <h1 class="text-center">Nivel Experimentado</h1>
    <br>
        <div class="row">
            <div class="col {{ $errors->has('experimentadocorto1') ? 'has-error' : ''}}">
                <label for="experimentadocorto1" class="control-label">{{ 'Experimentado corto 1*' }}</label>
                <input class="form-control" name="experimentadocorto1" type="text" id="experimentadocorto1" value="{{ isset($competencium->experimentadocorto1) ? $competencium->experimentadocorto1 : ''}}" required>
                {!! $errors->first('experimentadocorto1', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="col {{ $errors->has('experimentadocorto2') ? 'has-error' : ''}}">
                <label for="experimentadocorto2" class="control-label">{{ 'Experimentado corto 2*' }}</label>
                <input class="form-control" name="experimentadocorto2" type="text" id="experimentadocorto2" value="{{ isset($competencium->experimentadocorto2) ? $competencium->experimentadocorto2 : ''}}" required>
                {!! $errors->first('experimentadocorto2', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="col {{ $errors->has('experimentadocorto3') ? 'has-error' : ''}}">
                <label for="experimentadocorto3" class="control-label">{{ 'Experimentado corto 3*' }}</label>
                <input class="form-control" name="experimentadocorto3" type="text" id="experimentadocorto3" value="{{ isset($competencium->experimentadocorto3) ? $competencium->experimentadocorto3 : ''}}" required>
                {!! $errors->first('experimentadocorto3', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    <br>
        <div class="row">
            <div class="col {{ $errors->has('experimentadoaccion1') ? 'has-error' : ''}}">
                <label for="experimentadoaccion1" class="control-label">{{ 'Accion 1' }}</label>
                <input class="form-control" name="experimentadoaccion1" type="text" id="experimentadoaccion1" value="{{ isset($competencium->experimentadoaccion1) ? $competencium->experimentadoaccion1 : ''}}" required>
                {!! $errors->first('experimentadoaccion1', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="col {{ $errors->has('experimentadoaccion2') ? 'has-error' : ''}}">
                <label for="experimentadoaccion2" class="control-label">{{ 'Accion 2' }}</label>
                <input class="form-control" name="experimentadoaccion2" type="text" id="experimentadoaccion2" value="{{ isset($competencium->experimentadoaccion2) ? $competencium->experimentadoaccion2 : ''}}" required>
                {!! $errors->first('experimentadoaccion2', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="col {{ $errors->has('experimentadoaccion3') ? 'has-error' : ''}}">
                <label for="experimentadoaccion3" class="control-label">{{ 'Accion 3' }}</label>
                <input class="form-control" name="experimentadoaccion3" type="text" id="experimentadoaccion3" value="{{ isset($competencium->experimentadoaccion3) ? $competencium->experimentadoaccion3 : ''}}" required>
                {!! $errors->first('experimentadoaccion3', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    <br>
    <input style="background-color: #cebd5a; border: none;" class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Guardar' : 'Guardar' }}">

</div>

