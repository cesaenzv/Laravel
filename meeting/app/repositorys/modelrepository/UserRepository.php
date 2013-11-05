<?php 

class UserRepository implements UserRepositoryInterface{

	public function __construct(){
		User::observe(new UserObserver);
	}

	public function all(){
		return User::all()->toArray();
	}

	public function create($elem){
		$currentDate = date('d-m-Y H:i:s');
		$elem['created_at'] = $currentDate;
		$elem['last_login'] = $currentDate;
		$elem['birthday'] = date('d-m-Y', strtotime($elem['birthday']));
		$elem['password'] = Hash::make($elem['password']);
		return User::create($elem);
	}

	public function delete($elem){
		return User::delete($elem);
	}

	public function find($elem){
		return User::find($elem);
	}
} 