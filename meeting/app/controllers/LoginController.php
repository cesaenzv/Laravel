<?php

use App\DbRepositorys;

class LoginController extends BaseController {

	/*public function _construct (UserRepositoryInterface $users){
		$this->users = $users;
	}*/

	public function anyIndex(){
		return View::make('home');
	}

}