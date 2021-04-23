@extends('layouts/app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10"><h1>Registros</h1></div>
        <div class="col-md-2"><a class="btn btn-dark" href="{{ route('home') }}">Volver al incio</a></div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cortes as $corte)
                <tr>
                    <td><a href="{{ route('cortes.show', $corte->id_corte) }}"> {{$corte->id_corte}}</a></td>    
                    <td><a href="{{ route('cortes.show', $corte->id_corte) }}"> {{$corte->fecha}}</a></td>
                </tr>
            @endforeach
            <tr>
        </tbody>
    </table>
</div>
@endsection