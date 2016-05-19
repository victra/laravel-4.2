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
		\DB::table('users')->truncate();
		\DB::table('users')->insert(array (
			array (
			'fname' => 'Dracule',
			'lname' => 'Mihawk',
			'email' => 'Mihawk@mail.com',
			'password' => 'rahasiakampret',
			'created_at' => '2016-04-21 16:20:55',
			'updated_at' => '2016-04-21 18:27:55',
			),
			array (
			'fname' => 'Trafa',
			'lname' => 'Law',
			'email' => 'Law@mail.com',
			'password' => 'rahasiakampret',
			'created_at' => '2016-04-21 16:20:55',
			'updated_at' => '2016-04-21 18:27:55',
			),
		));
		/*\DB::table('users')->insert(array (
			array (
			'name' => 'Mihawk',
			'city_id' => '1',
			'created_at' => '2016-04-21 16:20:55',
			'updated_at' => '2016-04-21 18:27:55',
			),
			array (
			'name' => 'Dracule',
			'city_id' => '2',
			'created_at' => '2016-04-21 16:20:55',
			'updated_at' => '2016-04-21 18:27:55',
			),
		));

		\DB::table('cities')->insert(array (
			array (
			'city_name' => 'Jogja',
			'created_at' => '2016-04-21 16:20:55',
			'updated_at' => '2016-04-21 18:27:55',
			),
			array (
			'city_name' => 'Bandung',
			'created_at' => '2016-04-21 16:20:55',
			'updated_at' => '2016-04-21 18:27:55',
			),
		));*/
		\DB::table('articles')->truncate();
		\DB::table('articles')->insert(array (
			array (
			'user_id' => '1',
			'title' => 'contoh 1',
			'content' => 'Lorem ipsum dolor sit amet, consectetur adipis',
			'created_at' => '2016-04-21 16:20:55',
			'updated_at' => '2016-04-21 18:27:55',
			),
			array (
			'user_id' => '2',
			'title' => 'contoh 2',
			'content' => '2Lorem ipsum dolor sit amet, consectetur adipis',
			'created_at' => '2016-04-21 16:20:55',
			'updated_at' => '2016-04-21 18:27:55',
			),
		));
		\DB::table('comments')->truncate();
		\DB::table('comments')->insert(array (
			array (
			'content' => '1blablablauser',
			'user_id' => '1',
			'commentable_id' => '1',
			'commentable_type' => 'User',
			'created_at' => '2016-04-21 16:20:55',
			'updated_at' => '2016-04-21 18:27:55',
			),
			array (
			'content' => '2blablablaartikel',
			'user_id' => '1',
			'commentable_id' => '1',
			'commentable_type' => 'Article',
			'created_at' => '2016-04-21 16:20:55',
			'updated_at' => '2016-04-21 18:27:55',
			),
		));
	}

}
