@extends('template.master')

@section('masterTitle')
	Prueba Ajax
@endsection
@section('masterHeader')
	Prueba de Ajax
@endsection
@section('masterFooter')
	Derechos Reservados
@endsection

@section('masterContent')
{!! Form::select('roles',$roles,null,['id'=>'roles','onchange'=>'loadTable()']) !!}

{!! Form::text('nombre',null,['id'=>'nombre']) !!}
<input id="_token" value="{{ csrf_token() }}"></input>

<table>
	<thead>
			<th>ID</th>
			<th>Nombre</th>
	</thead>
	<tbody id="tbody">
		
	</tbody>
</table>

@endsection