<?php
 
return array(
 
    'default' => 'mysql',
 
    'connections' => array(

		'mysql' => array(
			'driver'    => 'mysql',
			'host' 		=> 'localhost',
			'database'  => 'laravel-testing',
			'username'  => 'root',
			'password'  => 'root',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),

		'mysql-collation' => array(
			'driver'    => 'mysql',
			'host' 		=> 'localhost',
			'database'  => 'laravel-testing',
			'username'  => 'root',
			'password'  => 'root',
			'charset'   => 'utf8mb4',
			'collation' => 'utf8mb4_unicode_ci',
			'prefix'    => '',
		),

        'sqlite' => array(
            'driver'   => 'sqlite',
            //'database' => ':memory:',
            'database' => app_path() . '/database/testing.sqlite',
            'prefix'   => ''
        ),
    )
); 