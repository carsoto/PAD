<table>
	<tr>
	    <td>Codigo</td>
	    <td>Nombre</td>
	    <td>Estado</td>
	    <td>Check</td>
		<td>Accion</td>
    </tr>
	@foreach($colores as $color)
		{!! Form::open(['route' => ['colores.changestatus', $color->id], 'method' => 'PUT']) !!}
		    <tr>
			    <td>{{ $color->cod_colorx }}</td>
			    <td>{{ $color->nom_colorx }}</td>
			    <td>{{ $color->ind_estado }}</td>
			    <td>{!! Form::checkbox('color_estatus', '1', $color->ind_estado) !!}</td>
				<td>{!! Form::submit('CAMBIAR') !!}</td>
		    </tr>
	    {!! Form::close() !!}
	@endforeach
</table>