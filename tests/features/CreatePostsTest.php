<?php

/**
 * Created by PhpStorm.
 * User: isaias
 * Date: 06-08-17
 * Time: 06:34 PM
 */
class CreatePostsTest extends FeatureTestCase
{
    public function test_a_user_create_a_post()
    {
        // Having  : teninendo esta informacion
        $title = 'Esta es una pregunta';
        $content = 'Este es el contenido';

        $this->actingAs($user = $this->defaultUser());  //usuario conectado

        // When  cuando un usuario
        $this->visit(route('posts.create'))    //viista la ruta para crear un posts
        ->type($title,'title')               //escribe un titulo y un contenido
        ->type($content, 'content')
        ->press('Publicar');                //presiona el boton publicar

        // Then : entonces deberiamos ver cambios en la base de datos
        $this->seeInDatabase('posts', [
            'title' => $title,
            'content' =>$content,
            'pending' => true,
            'user_id' => $user->id,
            ]);

        //Test a user is redirected to the posts details after creating it.
        // Deberiamos ver que el usuario es redirigido al detalle del posts
       //$this->seeInElement('h1', $title);
        $this->see($title);
    }

}