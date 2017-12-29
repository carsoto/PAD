<table>
	<tr>
	    <td>Nombre</td>
	    <td>Abreviatura</td>
	    <td>Estado</td>
	    <td>Check</td>
		<td>Accion</td>
    </tr>
	@foreach($actividades as $actividad)
		{!! Form::open(['route' => ['actividades.changestatus', $actividad->id], 'method' => 'PUT']) !!}
		    <tr>
			    <td>{{ $actividad->nom_activi }}</td>
			    <td>{{ $actividad->abr_activi }}</td>
			    <td>{{ $actividad->ind_estado }}</td>
			    <td>{!! Form::checkbox('actividad_estatus', '1', $actividad->ind_estado) !!}</td>
				<td>{!! Form::submit('CAMBIAR') !!}</td>
		    </tr>
	    {!! Form::close() !!}
	@endforeach
</table>