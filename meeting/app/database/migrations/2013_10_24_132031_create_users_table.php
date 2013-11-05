<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{	
			$table->engine = 'InnoDB';

			$table->increments('id');
			$table->string('name',50);
			$table->string('lastname',50);
			$table->string('username',25);
			$table->string('password');
			$table->string('email',100);
			$table->date('birthday');
			$table->dateTime('created_at');
			$table->dateTime('last_login');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
	}

}
