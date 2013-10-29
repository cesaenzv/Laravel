<?php 
//namespace App\InterfaceRepositorys;

interface BaseInterface{
	public function all();
	public function create($elem);
	public function find($elem);
	public function delete($elem);
}

interface UserRepositoryInterface extends BaseInterface{	

}