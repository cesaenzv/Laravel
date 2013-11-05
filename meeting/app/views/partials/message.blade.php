<section class="msg-server">		
	@if($errors->any())
		<div class="error-msg">
		  	<ul>
		  		{{'<li>'}}
		    	{{implode('</li><li>', $errors->all())}}
		  		{{'</li>'}}
		  	</ul>			
		</div>
	@endif
	@if(Session::has('msg'))
	  	<div class="data-msg">
		  	<ul>
		  		{{'<li>'}}
		    	{{implode('</li><li>', Session::get('msg'))}}
		  		{{'</li>'}}
		  	</ul>			
		</div>
	@endif
</section>
