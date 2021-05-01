@extends('layouts/app')
<link href="{{ asset('assets/css/jquery.treegrid.css') }}" rel="stylesheet">
@section('content')
    <table class="table table-bordered tree-basic">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            {{$contador = 0}}
            @foreach ($resultado as $value)
                {{$contador=$contador+1}}
                <tr class="treegrid-{{json_decode($value)->id_corte}} expanded">
                    <td>{{json_decode($value)->id_corte}}</td>
                    <td>{{json_decode($value)->fecha}}</td>
                    @if (count(json_decode($value)->detalle) != 0)
                        </tr>
                            @if (count(json_decode($value)->detalle))
                                @for ($i = 0; $i < count(json_decode($value)->detalle); $i++)
                                    <tr class="treegrid-parent-{{json_decode($value)->id_corte}}">
                                        <td>{{json_decode($value)->detalle[$i]->id_registro}}</td>
                                        <td>{{json_decode($value)->detalle[$i]->fechaentrada}}</td>
                                        <td>{{json_decode($value)->detalle[$i]->totalPagado}}</td>
                                    </tr>    
                                @endfor           
                            @else
                                <tr class="treegrid-parent-{{json_decode($value)->id_corte}}">
                                    <td>{{json_decode($value)->detalle[0]->id_registro}}</td>
                                    <td>{{json_decode($value)->detalle[$i]->fechaentrada}}</td>
                                    <td>{{json_decode($value)->detalle[0]->totalPagado}}</td>
                                </tr>    
                            @endif
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('assets/js/jquery.treegrid.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.tree-basic').treegrid();
            })
    </script>
@endsection





















{{-- @extends('layouts/app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10"><h1>Registros</h1></div>
        <div class="col-md-2"><a class="btn btn-dark" href="{{ route('home') }}">Volver al incio</a></div>
    </div>
    <div class="accordion" id="accordionExample">
        @foreach ($cortes as $corte)
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{$corte->id_corte}}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$corte->id_corte}}"
                        aria-expanded="true" aria-controls="collapse{{$corte->id_corte}}">
                            <strong>ID&nbsp;</strong>{{$corte->id_corte}}&nbsp;&nbsp;|&nbsp;&nbsp;<strong>Fecha&nbsp;</strong>{{$corte->fecha}}
                    </button>
                </h2>
                <div id="collapse{{$corte->id_corte}}" class="accordion-collapse collapse" aria-labelledby="heading{{$corte->id_corte}}" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <a class="btn btn-dark" href="{{ route('cortes.show', $corte->id_corte) }}">Ver en una pestaña externa</a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Fecha de Entrada</th>
                                        <th>Fecha de Salida</th>
                                        <th>Tiempo</th>
                                        <th>Placas</th>
                                        <th>Dejo Llave</th>
                                        <th>Cancelado</th>
                                        <th>Salida</th>
                                        <th>Horas cobradas</th>
                                        <th>Perdio Ticket</th>
                                        <th>Sinronizado</th>
                                        <th>Pagado</th>
                                        <th>Total Pagado</th>
                                        <th>IVA</th>
                                        <th>No. Noches</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detalles as $detalle)
                                        @if ($corte->id_corte == $detalle->id_corte)
                                            <tr>
                                                <td>{{$detalle->id_registro}}</td>
                                                <td>{{$detalle->fechaentrada}}</td>
                                                <td>{{$detalle->fechasalida}}</td>
                                                <td>{{$detalle->tiempo}}</td>
                                                <td>{{$detalle->placas}}</td>
                                                <td>{{$detalle->dejoLLave}}</td>
                                                <td>{{$detalle->cancelado}}</td>
                                                <td>{{$detalle->salida}}</td>
                                                <td>{{$detalle->hrsCobradas}}</td>
                                                <td>{{$detalle->perdioTicket}}</td>
                                                <td>{{$detalle->sinronizado}}</td>
                                                <td>{{$detalle->pagado}}</td>
                                                <td>{{$detalle->totalPagado}}</td>
                                                <td>{{$detalle->iva}}</td>
                                                <td>{{$detalle->noNoches}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection --}}