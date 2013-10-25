<?php

class UserController extends BaseController{

	public function index(){
		return View::make('user.index');
	}

	public function CreateNew(){
		return View::make('user.register');		
	}
}