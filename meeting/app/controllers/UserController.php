<?php
class UserController extends BaseController{

	public function index(){
		return View::make('user.index');
	}

	public function CreateNew(){
		if(count(Input::all())<=1)
			return View::make('user.register');

		$input = $this->validateToken(Input::all());		
		var_dump($input);		
	}

	private function validateToken($input){
		if (Session::token() != $input['_token'])
			throw new  Illuminate\Session\TokenMismatchException;
		unset($input['/'.Request::path()]);
		unset($input['_token']);
		return $input;
	}
}