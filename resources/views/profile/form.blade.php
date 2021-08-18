
                    <form role="form" method="POST" action="{{ route('register') }}">
                            @csrf
                        <div class="row">
                            <div class="col{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label for="user" class="control-label">{{ 'Nombre de la Persona*' }}</label>
                                <div class="input-group input-group-alternative mb-3">
                                    <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre de la Persona') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
                                </div>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col{{ $errors->has('puesto') ? ' has-danger' : '' }}">
                                <label for="user" class="control-label">{{ 'Puesto de la Persona' }}</label>
                                <select name="tipo" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre de la Persona') }}" id="tipo" type="text" name="tipo" value="{{ old('tipo') }}" >
                                
                                        <option>Recidente de Obra</option>
                                        <option>Jefe Legal</option>
                                        <option>Gerente de Planta</option>
                                        <option>Coordinador de Escuela Expendio</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label for="competencia" class="control-label">{{ 'Correo Electronico*' }}</label>
                                <div class="input-group input-group-alternative mb-3">
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Correo Electronico') }}" type="email" name="email" value="{{ old('email') }}" required>
                                </div>
                            </div>

                            <div class="text-center">
                            <label for="Tipo" class="control-label">{{ 'Tipo de la Persona' }}</label><br>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary ">Evaluador</button>
                                    <button type="button" class="btn btn-primary ">Practicante</button>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <label for="competencia" class="control-label">{{ 'Nueva Contraseña*' }}</label>
                                <div class="input-group input-group-alternative">
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Ingresar una contraseña') }}" type="password" name="password" required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col">
                            <label for="competencia" class="control-label">{{ 'Comfirmar Contraseña' }}</label>
                                <div class="input-group input-group-alternative">
                                    <input class="form-control" placeholder="{{ __('Confirma la Contraswña') }}" type="password" name="password_confirmation" required>
                                </div>
                            </div>
                        </div><br>
                        <button type="submit" class="btn btn-link mt-4" style="background-color: #b7c730; color: #f2f4f6;">{{ __('Guardar') }}</button>
                    </form>
                        
