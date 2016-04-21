<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//$this->call('UserTableSeeder');
		\DB::table('user')->insert(array (
			array (
			'first_name' => 'dracule',
			'last_name' => 'mihawk',
			'address' => 'Jalan-jalan no.00 rt.8',
			'phone' => '089723412',
			'birth_date' => '1992-05-23',
			'created_at' => '2016-04-21 16:20:55',
			'updated_at' => '2016-04-21 18:27:55',
			),
		));
	}

}
