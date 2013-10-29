@extends('shared.master')

@section('Content')
	<div class="col-md-12">
		BIENVENIDO A LA PAGINA DE INICIO
		{{link_to('usuario/nuevo', 'Crear Nuevo');}}
		<section class="msg-server">
			@if($errors->any())
			  <ul>
			  	{{'<li>'}}
			    {{implode('</li><li>', $errors->all())}}
			  	{{'</li>'}}
			  </ul>			
			@endif
			@if($errors->any())
			  <ul>
			    {{'<li>'}}
			    {{implode('</li><li>', $msg)}}
			  	{{'</li>'}}
			  </ul>			
			@endif
		</section>
	</div>
@stop