@extends('shared.master')

@section('Content')
	<div class="col-md-12">
		BIENVENIDO A LA PAGINA DE INICIO
		{{link_to('usuario/nuevo', 'Crear Nuevo');}}
		<section class="msg-server">
			@if($errors->any())
			  <ul>
			  	{{echo '<li>'}}
			    {{implode('</li><li>', $errors->all())}}
			  	{{echo '</li>'}}
			  </ul>			
			@endif
			@if($errors->any())
			  <ul>
			    {{echo '<li>'}}
			    {{implode('</li><li>', $msg)}}
			  	{{echo '</li>'}}
			  </ul>			
			@endif

		</section>
	</div>
@stop