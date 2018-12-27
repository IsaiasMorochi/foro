<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreatePostTest extends TestCase
{
    /**
     * 1. Lo que tenemos
     * 2. Esperamos un resultado
     * 3. Resultado
     * @return void
     */
    public function test_a_user_create_a_post()
    {
        // 1. Having
        $title = 'Esta es una pregunta';
        $content = 'Este es el contenido';

        $this->actingAs($this->defaultUser())

//            ->assertViewHas($title, 'title')
//            ->assertViewHas($content, 'content')
        // 2. When
        ->post(route('posts.create'))

        ->press('Publicar');

        // 3. Then
//        $this->assertDatabaseHas('posts',[
//            'title' => $title,
//            'content' => $content,
//            'pending' => true,
//        ]);


        // Test a user is redirected to the posts details after creating it.
//        $this->assertViewHas($title);
    }
}
