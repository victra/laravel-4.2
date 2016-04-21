<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function($table){
			$table->increments('id')->bigint(100);
			$table->string('first_name');
			$table->string('last_name');
			$table->text('address');
			$table->integer('phone');
			$table->date('birth_date');
			$table->datetime('created_at');
			$table->datetime('updated_at');
			$table->timestamp('xtimestamp')->NOW();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
	}

}
