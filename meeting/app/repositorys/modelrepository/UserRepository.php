<?php 

class UserRepository implements UserRepositoryInterface{

	public function __construct(){
		User::observe(new UserObserver);
	}

	public function all(){
		return User::all()->toArray();
	}

	public function create($elem){
		$elem['created_at'] = date('d-m-y H:i:s');
		$elem['last_login'] = date('d-m-y H:i:s');
		$elem['birthday'] = date('d-m-y', strtotime($elem['birthday']));
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