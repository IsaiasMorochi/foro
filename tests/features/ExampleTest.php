<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends FeatureTestCase
{

    //use DatabaseMigrations;

    //cuando tenemos mas de 30 migraciones para que demore en hacer la prueba y esta no ejecuta la migrate
    // por esto hacer php artisan migrate=mysql_tests
    //use DatabaseTransactions;

    /**
     * A basic functional test example.
     *
     * @return void
     */

    function test_basic_example()
    {
        $name = 'Isaias Morochi';
        $email = 'admin@styde.net';

        $user = factory(\App\User::class)->create([
            'name' => $name,
            'email' => $email,
            ]);

        $this->actingAs($user, 'api')
             ->visit('api/user')
             ->see($name)
             ->see($email);
    }
}
