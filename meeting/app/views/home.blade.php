@extends('shared.master')

@section('Content')
	<div class="col-md-12">
		<h1>BIENVENIDO A LA PAGINA DE INICIO</h1>
		@include('partials.message')
		<h3>Ingrese sus datos por favor:</h3>
		 {{ Form::open(array("url"=>"/acceso/log-in","autocomplete" => "off","role"=>"form","class"=>"col-md-4")) }}
		 	<div class="form-goup">
		        {{ Form::label("username", "Username") }}
		        {{ Form::text("username", Input::get("username"), array('class'=>'form-control',"placeholder" => "john.smith")) }}
	        </div>
	        <div class="form-goup">
		        {{ Form::label("password", "Password") }}
		        {{ Form::password("password", array("placeholder" => "••••••••••",'class'=>'form-control')) }}
	        </div>
	        <hr/>
	        <div class="form-goup">
	        	{{link_to('usuario/nuevo', 'Crear Nuevo');}}
	        	{{ Form::submit("login",array('class'=>'btn btn-default')) }}
	        </div>
	    {{ Form::close() }}
	</div>
@stop