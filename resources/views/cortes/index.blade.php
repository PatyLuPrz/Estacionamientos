@extends('layouts/app')
<link href="{{ asset('assets/css/jquery.treegrid.css') }}" rel="stylesheet">
@section('content')
<div class="container">
<div class="row">
    <div class="col-sm-12 col-md-8"><br><h1>Cortes</h1></div>
    <div class="col-sm-12 col-md-2"><br><a class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Crear nuevo</a></div>
    <div class="col-sm-12 col-md-2"><br><a class="btn btn-dark" href="{{ route('home') }}">Volver al inicio</a></div>
</div>
    <table class="table table-bordered tree-basic">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Opciones</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <input type="hidden" value="{{$contador = 0}}">
            @foreach ($resultado as $value)
                <input type="hidden" value="{{$contador=$contador+1}}">
                <tr class="treegrid-{{json_decode($value)->id_corte}}">
                    <td>{{json_decode($value)->id_corte}}</td>
                    <td>{{json_decode($value)->fecha}}</td>
                    <td>
                        <a class="text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal-{{json_decode($value)->id_corte}}"><i class="bi bi-pencil-square"></i></a> &nbsp;
                        <a class="text-dark" href="{{ route('cortes.show',json_decode($value)->id_corte) }}"><i class="bi bi-arrow-up-right-square"></i></a>
                    </td>
                    @if (count(json_decode($value)->detalle) != 0)
                        </tr>
                            @if (count(json_decode($value)->detalle))
                                @for ($i = 0; $i < count(json_decode($value)->detalle); $i++)
                                    <tr class="treegrid-parent-{{json_decode($value)->id_corte}}">
                                        <td>{{json_decode($value)->detalle[$i]->id_registro}}</td>
                                        <td>{{json_decode($value)->detalle[$i]->fechaentrada}}</td>
                                        <td></td>
                                        <td>{{json_decode($value)->detalle[$i]->totalPagado}}</td>
                                    </tr>    
                                @endfor           
                            @else
                                <tr class="treegrid-parent-{{json_decode($value)->id_corte}}">
                                    <td>{{json_decode($value)->detalle[0]->id_registro}}</td>
                                    <td>{{json_decode($value)->detalle[$i]->fechaentrada}}</td>
                                    <td></td>
                                    <td>{{json_decode($value)->detalle[0]->totalPagado}}</td>
                                </tr>    
                            @endif
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>   
</div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('assets/js/jquery.treegrid.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.tree-basic').treegrid();
            })
    </script>
@endsection

<!-- Insert Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Insertar nuevo corte</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('cortes.create') }}">
                @csrf
                @method('put')
                <div class="form-group row">
                    <label for="fecha" class="col-sm-1-12 col-form-label">Fecha</label>
                    <div class="col-sm-1-12">
                        <input type="date" class="form-control" name="fecha">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fechaAnterior" class="col-sm-1-12 col-form-label">Fecha anterior</label>
                    <div class="col-sm-1-12">
                        <input type="date" class="form-control" name="fechaAnterior">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="totalCorte" class="col-sm-1-12 col-form-label">Total del corte</label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="totalCorte">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="totalHrsCobradas" class="col-sm-1-12 col-form-label">Total de horas cobradas</label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="totalHrsCobradas">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="totalReg" class="col-sm-1-12 col-form-label">Total registrado</label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="totalReg">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger-outline" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-dark">Guardar</button>
                </div>
            </form>
        </div>
        
        </div>
    </div>
</div>


@foreach ($resultado as $value)
    <!-- Edit Modal -->
    <div class="modal fade" id="exampleModal-{{json_decode($value)->id_corte}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar corte No. {{json_decode($value)->id_corte}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('cortes.update',json_decode($value)->id_corte) }}">
                    @csrf
                    @method('put')
                    
                    <div class="form-group row">
                        <label for="fecha" class="col-sm-1-12 col-form-label">ID del corte</label>
                        <div class="col-sm-1-12">
                            <input type="text" class="form-control" name="id_corte" value="{{json_decode($value)->id_corte}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fecha" class="col-sm-1-12 col-form-label">Fecha</label>
                        <div class="col-sm-1-12">
                            <input type="date" class="form-control" name="fecha" value="{{json_decode($value)->fecha}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fechaAnterior" class="col-sm-1-12 col-form-label">Fecha anterior</label>
                        <div class="col-sm-1-12">
                            <input type="date" class="form-control" name="fechaAnterior" value="{{json_decode($value)->fechaAnterior}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="totalCorte" class="col-sm-1-12 col-form-label">Total del corte</label>
                        <div class="col-sm-1-12">
                            <input type="text" class="form-control" name="totalCorte" value="{{json_decode($value)->totalCorte}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="totalHrsCobradas" class="col-sm-1-12 col-form-label">Total de horas cobradas</label>
                        <div class="col-sm-1-12">
                            <input type="text" class="form-control" name="totalHrsCobradas" value="{{json_decode($value)->totalHrsCobradas}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="totalReg" class="col-sm-1-12 col-form-label">Total registrado</label>
                        <div class="col-sm-1-12">
                            <input type="text" class="form-control" name="totalReg" value="{{json_decode($value)->totalReg}}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger-outline" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-dark">Guardar</button>
                    </div>
                </form>
            </div>
            
            </div>
        </div>
    </div>
    
@endforeach
