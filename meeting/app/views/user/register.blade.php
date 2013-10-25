@extends('shared.master')

@section('Content')
	<div class="col-md-6 col-md-offset-3">
		{{Form::open(array('route'=>'usuario.store','role'=>'form'))}}				
			{{Form::label('name', 'Nombre(s):')}}
			{{Form::text('name','', array('class'=>'form-control', 'placeholder'=>'Nombre1 Nombre2'))}}
			{{Form::label('lastname', 'Apellidos(s):')}}
			{{Form::text('lastname','', array('class'=>'form-control', 'placeholder'=>'Apellido1 Apellido2'))}}
			{{Form::label('username', 'Nombre de Usuario:')}}
			{{Form::text('username','', array('class'=>'form-control'))}}
			<br/>
			{{Form::submit('Guardar',array('class'=>'btn btn-default'));}}
		{{Form::close()}}
	</div>
@stop