@extends('shared.master')

@section('Content')
	<div class="col-md-6 col-md-offset-3">
		{{Form::open(array('route'=>'ususario.nuevo','role'=>'form'))}}			
			<div class="form-group">
				{{Form::label('name', 'Nombre(s):')}}
				{{Form::text('name','', array('class'=>'form-control', 'placeholder'=>'Nombre1 Nombre2'))}}
			</div>	
			<div class="form-goup">
				{{Form::label('lastname', 'Apellidos(s):')}}
				{{Form::text('lastname','', array('class'=>'form-control', 'placeholder'=>'Apellido1 Apellido2'))}}
			</div>
			<div class="form-goup">
				{{Form::label('username', 'Nombre de Usuario:')}}
				{{Form::text('username','', array('class'=>'form-control'))}}
			</div>
			<div class="form-goup">
				{{Form::label('password', 'Contraseña:')}}
				{{Form::password('password', array('class'=>'form-control'))}}
			</div>
			<div class="form-goup">
				{{Form::label('password_confirmation', 'Ingrese nuevamente la contraseña:')}}
				{{Form::password('password_confirmation', array('class'=>'form-control'))}}
			</div>
			<div class="form-goup">
				{{Form::label('email', 'Correo de contacto:')}}
				{{Form::email('email', '', array('class'=>'form-control', 'placeholder'=>'example@example.com'))}}
			</div>
			<div class="form-goup">
				{{Form::label('birthday', 'Fecha de nacimiento:')}}
				{{Form::text('birthday','', array('class'=>'form-control widget-datepicker'))}}				
			</div>
			<br/>
			{{Form::submit('Guardar',array('class'=>'btn btn-default'));}}
		{{Form::close()}}
	</div>
@stop

@section('Scripts_Tags')
	{{HTML::script('js/jqueryWidgets.js')}}
	<script type="text/javascript">
		jqueryWidget.datepicker();
	</script>
@stop