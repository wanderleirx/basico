@extends('layouts.main')

@section('page-title')
	| Gerenciamento de Clientes
@stop

@section('content')
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Cidade/Estado</th>
				<th>Nacimento</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			@foreach($customers as $customer)
			<tr>
				<td>{{ $customer->name }}</td>
				<td>{{ $customer->city }} - {{ $customer->state }}</td>
				<td>{{ $customer->birthdate }}</td>
				<td width="1%" nowrap>
					<a href="{{ route('clientes.edit', $customer->id) }}" class="btn btn-xs btn-default">Editar</a>
					<a href="#" class="btn btn-xs btn-default">Excluir</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@stop