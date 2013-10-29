<?php 

//namespace App\DbRepositorys;

//use App\InterfaceRepositorys;
//use App\Models;

class UserRepository implements UserRepositoryInterface{

	public function all(){
		return User::all()->toArray();
	}

	public function create($elem){
		$currentDate = date('Y-m-d H:i:s');
		$elem['created_at'] = $currentDate;
		$elem['last_login'] = $currentDate;
		return User::create($elem);
	}

	public function delete($elem){
		return User::delete($elem);
	}

	public function find($elem){
		return User::find($elem);
	}

} 