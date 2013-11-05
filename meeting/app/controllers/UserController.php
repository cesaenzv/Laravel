<?php

class UserController extends BaseController{

	/*Definicion de objetos de dominio*/
	protected $user;

	public function __construct (UserRepository $userRepository){
		$this->user = $userRepository;
	}

	public function index(){
		return View::make('user.index');
	}

	public function store(){
		if(count(Input::all())>1){
			$created =  $this->user->create(Input::all());
			if($created != null)
				return Redirect::route('login')->with('msg','Usuario creado satisfactoriamente.');
			else
				return Redirect::route('login')->withInput()->withErrors($newUser->errors());
		}
		return View::make('user.register');
	}

	
}