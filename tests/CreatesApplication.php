<?php

namespace Tests;

use App\User;
use Illuminate\Contracts\Console\Kernel;


trait CreatesApplication
{
    /**
     * @var \App\User
     */
     protected  $defaultUser;
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }

    public function defaultUser(){

        if($this->defaultUser){
            return $this->defaultUser;
        }
        return $this->defaultUser = factory(User::class)->create();
    }

}
