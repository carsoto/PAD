<table>
	<tr>
	    <td>Codigo</td>
	    <td>Nombre</td>
	    <td>Estado</td>
	    <td>Tipo</td>
	    <td>Check</td>
		<td>Accion</td>
    </tr>
	@foreach($carrocerias as $carroceria)
		{!! Form::open(['route' => ['carrocerias.changestatus', $carroceria->id], 'method' => 'PUT']) !!}
		    <tr>
			    <td>{{ $carroceria->cod_carroc }}</td>
			    <td>{{ $carroceria->nom_carroc }}</td>
			    <td>{{ $carroceria->ind_estado }}</td>
			    <td>{{ $carroceria->ind_tipoxx }}</td>
			    <td>{!! Form::checkbox('carroceria_estatus', '1', $carroceria->ind_estado) !!}</td>
				<td>{!! Form::submit('CAMBIAR') !!}</td>
		    </tr>
	    {!! Form::close() !!}
	@endforeach
</table>