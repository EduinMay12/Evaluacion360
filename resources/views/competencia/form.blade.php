
<center><h1>{{ $modo }} Competencia</h1></center>
@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>  
            @endforeach
        </ul>
    </div>
@endif

    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label for="NombreCompetencia">Nombre Competencia: </label>
                <input type="text" class="form-control" name="NombreCompetencia" id="NombreCompetencia" value="{{ isset($competencia->NombreCompetencia)?$competencia->NombreCompetencia:old('NombreCompetencia') }}"><br>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label for="Descripcion">Descripción: </label>
                <input type="text" class="form-control" name="Descripcion" id="Descripcion" value="{{ isset($competencia->Descripcion)?$competencia->Descripcion:old('Descripcion') }}"><br>
            </div>
        </div>
    </div>
    
    <center><h1>Nivel Básico</h1></center>
    
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="AccionCorta1">Accion Corta 1*: </label>
                <input type="text" class="form-control" name="AccionCorta1" id="AccionCorta1" value="{{ isset($competencia->AccionCorta1)?$competencia->AccionCorta1:old('AccionCorta1') }}"><br>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="AccionCorta2">Accion Corta 2*: </label>
                <input type="text" class="form-control" name="AccionCorta2" id="AccionCorta2" value="{{ isset($competencia->AccionCorta2)?$competencia->AccionCorta2:old('AccionCorta2') }}"><br>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="AccionCorta3">Accion Corta 3*: </label>
                <input type="text" class="form-control" name="AccionCorta3" id="AccionCorta3" value="{{ isset($competencia->AccionCorta3)?$competencia->AccionCorta3:old('AccionCorta3') }}"><br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
            <label for="AccionCorta01">Accion Corta 1: </label>
                <input type="text" class="form-control" name="AccionCorta01" id="AccionCorta01" value="{{ isset($competencia->AccionCorta01)?$competencia->AccionCorta01:old('AccionCorta01') }}"><br>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="AccionCorta02">Accion Corta 2: </label>
                <input type="text" class="form-control" name="AccionCorta02" id="AccionCorta02" value="{{ isset($competencia->AccionCorta02)?$competencia->AccionCorta02:old('AccionCorta02') }}"><br>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="AccionCorta03">Accion Corta 3: </label>
                <input type="text" class="form-control" name="AccionCorta03" id="AccionCorta03" value="{{ isset($competencia->AccionCorta03)?$competencia->AccionCorta03:old('AccionCorta03') }}"><br>
            </div>
        </div>
    </div>

    <center><h1>Nivel Calificado</h1></center>
    
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
            <label for="AccionCorta_1">Accion Corta 1*: </label>
        <input type="text" class="form-control" name="AccionCorta_1" id="AccionCorta_1" value="{{ isset($competencia->AccionCorta_1)?$competencia->AccionCorta_1:old('AccionCorta_1') }}"><br>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
            <label for="AccionCorta_2">Accion Corta 2*: </label>
        <input type="text" class="form-control" name="AccionCorta_2" id="AccionCorta_2" value="{{ isset($competencia->AccionCorta_2)?$competencia->AccionCorta_2:old('AccionCorta_2') }}"><br>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
            <label for="AccionCorta_3">Accion Corta 3*: </label>
        <input type="text" class="form-control" name="AccionCorta_3" id="AccionCorta_3" value="{{ isset($competencia->AccionCorta_3)?$competencia->AccionCorta_3:old('AccionCorta_3') }}"><br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
            <label for="AccionCorta_01">Accion Corta 1: </label>
        <input type="text" class="form-control" name="AccionCorta_01" id="AccionCorta_01" value="{{ isset($competencia->AccionCorta_01)?$competencia->AccionCorta_01:old('AccionCorta_01') }}"><br>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
            <label for="AccionCorta_02">Accion Corta 2: </label>
        <input type="text" class="form-control" name="AccionCorta_02" id="AccionCorta_02" value="{{ isset($competencia->AccionCorta_02)?$competencia->AccionCorta_02:old('AccionCorta_02') }}"><br>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
            <label for="AccionCorta_03">Accion Corta 3: </label>
        <input type="text" class="form-control" name="AccionCorta_03" id="AccionCorta_03" value="{{ isset($competencia->AccionCorta_03)?$competencia->AccionCorta_03:old('AccionCorta_03') }}"><br>
            </div>
        </div>
    </div>

    <center><h1>Nivel Experimentado</h1></center>

    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
            <label for="AccionCorta__1">Accion Corta 1*: </label>
        <input type="text" class="form-control" name="AccionCorta__1" id="AccionCorta__1" value="{{ isset($competencia->AccionCorta__1)?$competencia->AccionCorta__1:old('AccionCorta__1') }}"><br>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
            <label for="AccionCorta__2">Accion Corta 2*: </label>
        <input type="text" class="form-control" name="AccionCorta__2" id="AccionCorta__2" value="{{ isset($competencia->AccionCorta__2)?$competencia->AccionCorta__2:old('AccionCorta__2') }}"><br>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
            <label for="AccionCorta__3">Accion Corta 3*: </label>
        <input type="text" class="form-control" name="AccionCorta__3" id="AccionCorta__3" value="{{ isset($competencia->AccionCorta__3)?$competencia->AccionCorta__3:old('AccionCorta__3') }}"><br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
            <label for="AccionCorta__01">Accion Corta 1: </label>
        <input type="text" class="form-control" name="AccionCorta__01" id="AccionCorta__01" value="{{ isset($competencia->AccionCorta__01)?$competencia->AccionCorta__01:old('AccionCorta1__01') }}"><br>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
            <label for="AccionCorta__02">Accion Corta 2: </label>
        <input type="text" class="form-control" name="AccionCorta__02" id="AccionCorta__02" value="{{ isset($competencia->AccionCorta__02)?$competencia->AccionCorta__02:old('AccionCorta__02') }}"><br>
            </div>
        </div>
        <!--div class="col-sm-4">
            <div class="form-group">
            <label for="AccionCorta__03">Accion Corta 3: </label>
            <input type="area" class="form-control" name="AccionCorta__03" id="AccionCorta__03" value="{{ isset($competencia->AccionCorta__03)?$competencia->AccionCorta__03:old('AccionCorta__03') }}"><br>
            </div>
        </div-->
        <div class="col-sm-4">
            <div class="form-group">
            <label for="AccionCorta__03">Accion Corta 3: </label>
            <input type="text" class="form-control" name="AccionCorta__03" id="AccionCorta__03" value="{{ isset($competencia->AccionCorta__03)?$competencia->AccionCorta__03:old('AccionCorta__03') }}"><br>
            </div>
        </div>
    </div>


    <input class="btn btn-success" style="background-color: #cebd5a; outline: none; border: none;" type="submit" value="{{ $modo }} Datos">
    <a class="btn btn-primary" style="background-color: #8A0D48; outline: none; border: none;" href="{{ url('competencia') }}">Volver</a>
    <br>