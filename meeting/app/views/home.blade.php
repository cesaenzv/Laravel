@extends('shared.master')

@section('Content')
	<div class="col-md-12">
		BIENVENIDO A LA PAGINA DE INICIO
		{{link_to('usuario/nuevo', 'Crear Nuevo');}}
	</div>
@stop