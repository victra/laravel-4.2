<?php

use Illuminate\Support\Facades\Artisan;

class ExampleTest extends TestCase {

	private static $setupDatabase = true;

    /**
     * Default preparation for each test
     *
     */
    public function setUp()
    {
        parent::setUp();
     
        if(self::$setupDatabase) {
            $this->setupDatabase();
        }
    }

    /**
     * Migrates the database and set the mailer to 'pretend'.
     * This will cause the tests to run quickly.
     *
     */
    private function setupDatabase()
    {
        fwrite(STDERR, print_r("\n\n--- Initializing Migration and Seeding DB ---\n", TRUE));

        Artisan::call('migrate');
        $this->seed();

        self::$setupDatabase = false;

        fwrite(STDERR, print_r("--- End Migration and Seeding DB ---\n\n", TRUE));
    }

    public function testUser_list()
    {
    	$crawler = $this->client->request('GET', 'user_list');
		$this->assertTrue($this->client->getResponse()->isOk());

		$response = $this->call('GET', '/user_list');
		//$response = $this->call($method, $uri, $parameters, $files, $server, $content);
		$json     = json_decode($response->getContent(), true);
		$this->assertArrayHasKey('fname', $json['results'][0]);
		//$this->assertEquals('test', $response->getContent());
    }

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

}
