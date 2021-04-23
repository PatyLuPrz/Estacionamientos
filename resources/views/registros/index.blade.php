@extends('layouts/app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10"><h1>Registros</h1></div>
        <div class="col-md-2"><a class="btn btn-dark" href="{{ route('home') }}">Volver al incio</a></div>
    </div>
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
                @foreach ($registros as $item)
                    <tr>
                        <td>{{$item->id_registro}}</td>
                        <td>{{$item->fechaentrada}}</td>
                        <td>{{$item->fechasalida}}</td>
                        <td>{{$item->tiempo}}</td>
                        <td>{{$item->placas}}</td>
                        <td>{{$item->dejoLLave}}</td>
                        <td>{{$item->cancelado}}</td>
                        <td>{{$item->salida}}</td>
                        <td>{{$item->hrsCobradas}}</td>
                        <td>{{$item->perdioTicket}}</td>
                        <td>{{$item->sinronizado}}</td>
                        <td>{{$item->pagado}}</td>
                        <td>{{$item->totalPagado}}</td>
                        <td>{{$item->iva}}</td>
                        <td>{{$item->noNoches}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>    
</div>
@endsection