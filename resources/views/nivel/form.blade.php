<form>
    <div class="row">
        <div class="col {{ $errors->has('competencia') ? 'has-error' : ''}}">
            <label for="competencia" class="control-label">{{ 'Competencia' }}</label>
            <input class="form-control" name="competencia" type="text" id="competencia" value="{{ isset($nivel->competencia) ? $nivel->competencia : ''}}" >
            {!! $errors->first('competencia', '<p class="help-block">:message</p>') !!}
        </div>
        
        <br><br><br>
        <div class="form-check {{ $errors->has('nivel') ? 'has-error' : ''}}">
            <input  class="form-check-input" name="nivel" type="radio" id="nivel" value="{{ isset($nivel->nivel) ? $nivel->nivel : ''}}">
            {!! $errors->first('nivel', '<p class="help-block">:Básico</p>') !!}
            <label class="form-check-label" for="flexRadioDefault1">
                Básico
            </label>
        </div>

        <div class="form-check {{ $errors->has('nivel') ? 'has-error' : ''}}">
            <input  class="form-check-input" name="nivel" type="radio" id="nivel" value="{{ isset($nivel->nivel) ? $nivel->nivel : ''}}">
            {!! $errors->first('nivel', '<p class="help-block">:message</p>') !!}
            <label class="form-check-label" for="flexRadioDefault2">
                Calificado
            </label>
        </div>

        <div class="form-check {{ $errors->has('nivel') ? 'has-error' : ''}}">
            <input  class="form-check-input" name="nivel" type="radio" id="nivel" value="{{ isset($nivel->nivel) ? $nivel->nivel : ''}}">
            {!! $errors->first('nivel', '<p class="help-block">:message</p>') !!}
            <label class="form-check-label" for="flexRadioDefault3">
                Experimentado
            </label>
        </div>

        <div class="col"><br>
            <input class="btn btn-primary" type="submit" value="{{ $formMode === 'niveledit' ? 'Update' : 'Agregar' }}">
        </div>
    </div>
</form> 
<br>
@include('admin.sidebar')