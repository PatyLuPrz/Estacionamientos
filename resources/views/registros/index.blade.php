@extends('layouts/app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7"><h1>Registros</h1></div>
        <div class="col-md-2"><a class="btn btn-dark" href="{{ route('home') }}">Volver al incio</a></div>
        <div class="col-md-3"><a class="btn btn-dark" href="{{ route('send.mail') }}">Enviar reporte por email</a></div>
    </div>
    <div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table" id="myTable">
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
	</div>
</div>
@endsection
@section('foot')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
    <script src="{{ asset('assets/js/export.js') }}"></script>
    
@endsection

