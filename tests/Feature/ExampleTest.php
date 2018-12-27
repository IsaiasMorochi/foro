<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;


class ExampleTest extends TestCase
{


    function test_basic_example()
    {
//        $response = $this->get('/');
//        $response->assertStatus(200);

        $user = factory(User::class)->create([
            'name' => 'Isaias Morochi',
            'email' => 'admin@admin.com',

        ]);

        /*
         * $user -> El usuario autenticado
         * api -> El driver a utilizar
         */
        $this->actingAs($user, 'api');

        $this->get('/api/user')
            ->assertSee('Isaias Morochi')
            ->assertSee('admin@admin.com');

    }
}
