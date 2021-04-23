@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inicio') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Bienvenido de nuevo!') }} {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div><br><br>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <img src="{{ asset('assets/img/cortes.png') }}" class="img-fluid" alt=""><br>
                    <a href="{{ route('cortes.index') }}" class="nav-link"><h2>Cortes</h2></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <img src="{{ asset('assets/img/registros.png') }}" class="img-fluid" alt=""><br>
                    <a href="{{ route('registros.index') }}"class="nav-link"><h2>Registros</h2></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
