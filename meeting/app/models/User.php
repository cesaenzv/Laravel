<?php

class User extends Eloquent {

	public $timestamps = false;

	protected $table = 'users';

	protected $fillable = array('id', 'name', 'lastname', 'username','password','email','birthday','created_at','last_login');
}