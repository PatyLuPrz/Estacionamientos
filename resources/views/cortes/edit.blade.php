@extends('layouts/app')
@section('content')
<div class="container">
    <div class="container">
        <form action="{{ route('cortes.update', [$corte->id_corte]) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="fecha" class="col-sm-1-12 col-form-label">Fecha</label>
                <div class="col-sm-1-12">
                    <input type="date" class="form-control" name="fecha" value={{$corte->fecha}}>
                </div>
            </div>
            <div class="form-group row">
                <label for="fechaAnterior" class="col-sm-1-12 col-form-label">Fecha anterior</label>
                <div class="col-sm-1-12">
                    <input type="date" class="form-control" name="fechaAnterior" value={{$corte->fechaAnterior}}>
                </div>
            </div>
            <div class="form-group row">
                <label for="totalCorte" class="col-sm-1-12 col-form-label">Total del corte</label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="totalCorte" value={{$corte->totalCorte}}>
                </div>
            </div>
            <div class="form-group row">
                <label for="totalHrsCobradas" class="col-sm-1-12 col-form-label">Total de horas cobradas</label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="totalHrsCobradas" value={{$corte->totalHrsCobradas}}>
                </div>
            </div>
            <div class="form-group row">
                <label for="totalReg" class="col-sm-1-12 col-form-label">Total registrado</label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="totalReg" value={{$corte->totalReg}}>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="d-grid gap-2">
                        <a class="btn btn-outline-dark" href="{{ route('cortes.show', [$corte->id_corte]) }}">Cancelar</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="d-grid gap-2">
                        <button class="btn btn-dark" type="submit">Guardar</button>
                    </div>
                </div>
        </form>
    </div>
</div>
@endsection