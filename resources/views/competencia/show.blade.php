
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                    @foreach($competencia as $item)
                                <tbody>
                                    <tr>
                                        <th> Nombre </th>
                                        <td> {{ $item->nombre }} </td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <th> Descripcion </th>
                                        <td> {{ $item->descripcion }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                            <h1 class="text-center">Nivel Basico</h1>
                            <br>
                                <div class="row">
                                    <div class="col {{ $errors->has('basicocorto1') ? 'has-error' : ''}}">
                                        <label for="basicocorto1" class="control-label">{{ 'Basico corto 1*' }}</label>
                                        <p>{{ $item->basicocorto1 }}</p>
                                    </div>
                                    <div class="col {{ $errors->has('basicocorto2') ? 'has-error' : ''}}">
                                        <label for="basicocorto2" class="control-label">{{ 'Basico corto 2*' }}</label>
                                        <p>{{ $item->basicocorto2 }}</p>
                                    </div>
                                    <div class="col {{ $errors->has('basicocorto3') ? 'has-error' : ''}}">
                                        <label for="basicocorto3" class="control-label">{{ 'Basico corto 3*' }}</label>
                                        <p>{{ $item->basicocorto3}}</p>  
                                    </div>
                                </div>
                            <br>
                                <div class="row">
                                    <div class="col {{ $errors->has('basicoaccion1') ? 'has-error' : ''}}">
                                        <label for="basicoaccion1" class="control-label">{{ 'Accion 1' }}</label>
                                        <p>{{ $item->basicoaccion1}}</p>
                                    </div>
                                    <div class="col {{ $errors->has('basicoaccion2') ? 'has-error' : ''}}">
                                        <label for="basicoaccion2" class="control-label">{{ 'Accion 2' }}</label>
                                        <p>{{ $item->basicoaccion2}}</p>
                                    </div>
                                    <div class="col {{ $errors->has('basicoaccion3') ? 'has-error' : ''}}">
                                        <label for="basicoaccion3" class="control-label">{{ 'Accion 3' }}</label>
                                        <p>{{ $item->basicoaccion3}}</p>
                                    </div>
                                </div>
                            <br>
                            <h1 class="text-center">Nivel Calificado</h1>
                            <br>
                            <div class="row">
                            <div class="col {{ $errors->has('calificadocorto1') ? 'has-error' : ''}}">
                                <label for="calificadocorto1" class="control-label">{{ 'Calificado corto 1*' }}</label>
                                <p>{{ $item->calificadocorto1}}</p>
                            </div>
                            <div class="col {{ $errors->has('calificadocorto2') ? 'has-error' : ''}}">
                                <label for="calificadocorto2" class="control-label">{{ 'Calificado corto 2*' }}</label>
                                <p>{{ $item->calificadocorto2}}</p>
                            </div>
                            <div class="col {{ $errors->has('calificadocorto3') ? 'has-error' : ''}}">
                                <label for="calificadocorto3" class="control-label">{{ 'Calificado corto 3*' }}</label>
                                <p>{{ $item->calificadocorto3}}</p> 
                            </div>
                        </div>
                    <br>
                        <div class="row">
                            <div class="col {{ $errors->has('calificadoaccion1') ? 'has-error' : ''}}">
                                <label for="calificadoaccion1" class="control-label">{{ 'Accion 1' }}</label>
                                <p>{{ $item->calificadoaccion1}}</p>
                            </div>
                            <div class="col {{ $errors->has('calificadoaccion2') ? 'has-error' : ''}}">
                                <label for="calificadoaccion2" class="control-label">{{ 'Accion 2' }}</label>
                                <p>{{ $item->calificadoaccion2}}</p>
                            </div>
                            <div class="col {{ $errors->has('calificadoaccion3') ? 'has-error' : ''}}">
                                <label for="calificadoaccion3" class="control-label">{{ 'Accion 3' }}</label>
                                <p>{{ $item->calificadoaccion3}}</p>
                            </div>
                        </div>
                    <br>
                    <h1 class="text-center">Nivel Experimentado</h1>
                    <br>
                        <div class="row">
                            <div class="col {{ $errors->has('experimentadocorto1') ? 'has-error' : ''}}">
                                <label for="experimentadocorto1" class="control-label">{{ 'Experimentado corto 1*' }}</label>
                                <p>{{ $item->experimentadocorto1}}</p>
                            </div>
                            <div class="col {{ $errors->has('experimentadocorto2') ? 'has-error' : ''}}">
                                <label for="experimentadocorto2" class="control-label">{{ 'Experimentado corto 2*' }}</label>
                                <p>{{ $item->experimentadocorto2}}</p>
                            </div>
                            <div class="col {{ $errors->has('experimentadocorto3') ? 'has-error' : ''}}">
                                <label for="experimentadocorto3" class="control-label">{{ 'Experimentado corto 3*' }}</label>
                                <p>{{ $item->experimentadocorto3}}</p>
                            </div>
                        </div>
                    <br>
                        <div class="row">
                            <div class="col {{ $errors->has('experimentadoaccion1') ? 'has-error' : ''}}">
                                <label for="experimentadoaccion1" class="control-label">{{ 'Accion 1' }}</label>
                                <p>{{ $item->experimentadoaccion1}}</p>
                            </div>
                            <div class="col {{ $errors->has('experimentadoaccion2') ? 'has-error' : ''}}">
                                <label for="experimentadoaccion2" class="control-label">{{ 'Accion 2' }}</label>
                                <p>{{ $item->experimentadoaccion2}}</p>
                            </div>
                            <div class="col {{ $errors->has('experimentadoaccion3') ? 'has-error' : ''}}">
                                <label for="experimentadoaccion3" class="control-label">{{ 'Accion 3' }}</label>
                                <p>{{ $item->experimentadoaccion3}}</p>
                            </div>
                        </div>
                    <br>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
