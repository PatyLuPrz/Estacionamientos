<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Laravel') }}</title>
    
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
<body>
    <h1>{{ $details['title'] }}</h1>
    <div class="row">
        <div class="col-md-10"><h1>Registros</h1></div>
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
                @foreach ($details['body'] as $item)
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
    <p>¡Gracias!</p>
</body>
</html>