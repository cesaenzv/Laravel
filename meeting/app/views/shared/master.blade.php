<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
    	<title>Meeting Manager</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <!-- Bootstrap -->
	    {{ HTML::style('libs/bootstrap/css/bootstrap.min.css')}}		

	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="../../assets/js/html5shiv.js"></script>
	      <script src="../../assets/js/respond.min.js"></script>
	    <![endif]-->
	    @yield('Styles_Tags')
	</head>
	<body>
		<header class="row">
			<div class="col-md-12">
				<h1>BIENVENIDO A "MEETING MANAGER"</h1>											
			</div>
		</header>
		<content class="row">
			<div class="container">
				@yield('Content')									
			</div>
		</content>
		<footer class="row">
			<div class="col-md-12">
				<h1>ESTAMOS EN CONTRUCCION</h1>											
			</div>
		</footer>
		{{HTML::script('libs/jquery/jquery-2.0.3.js')}}		
		{{HTML::script('libs/bootstrap/js/bootstrap.min.js')}}
		@yield('Scripts_Tags')					
	</body>
</html>