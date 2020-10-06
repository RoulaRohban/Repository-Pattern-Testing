<?php

namespace App\Repositories;
use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(
            //must bind the interface first.
            'App\Repositories\PostRepositoryInterface',
            'App\Repositories\PostRepository'
        );
    }
}