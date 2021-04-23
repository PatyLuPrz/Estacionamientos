@extends('layouts/app')
@section('content')

<div class="container">
    <h1>Corte</h1>
    Fecha: {{$corte->fecha}} <br>
    Fecha Anterior: {{$corte->fechaAnterior}} <br>
    Total del Corte: {{$corte->totalCorte}} <br>
    Total de horas Cobradas: {{$corte->totalHrsCobradas}} <br>
    Total registrado: {{$corte->totalReg}} <br><br>
    <a class="btn btn-dark" href="{{ route('cortes.index') }}">Volver a la lista</a> | 
    <a class="btn btn-dark" href="{{ route('cortes.edit',$corte->id_corte) }}">Editar informacion del corte</a> <br>
    <hr>
    <h1>Detalle del corte:</h1>
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
                @foreach ($detalle as $item)
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
    <br>
</div>

@endsection