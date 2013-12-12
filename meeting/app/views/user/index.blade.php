@extends('shared.master')

@section('Content')
	<div class="col-md-12">
		ESTA ES LA PAGINA INICIAL DEL USUARIO		
	</div>
	@include('MeetingCalendar::calendar')
@stop