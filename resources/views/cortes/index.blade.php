@extends('layouts/app')
@section('content')
<div class="container">
    <br><h1>CORTES</h1>
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
