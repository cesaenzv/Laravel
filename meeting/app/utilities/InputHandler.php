<?php 

class InputHandler {

	public function validateToken($input = array(), $requestPath = ""){
		if (isset($input('_token')) && Session::token() != $input['_token'] )
			throw new  Illuminate\Session\TokenMismatchException;
		unset($input['/'.$requestPath]);
		unset($input['_token']);
		return $input;
	}
}