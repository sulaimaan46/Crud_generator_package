<?php

namespace HP\CrudGenrator;

use Illuminate\Support\ServiceProvider;

class CrudGenratorServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    protected $commands = [
        'HP\CrudGenrator\Commands\CrudGeneratorCommand',
    ];

    public function register(){
        $this->commands($this->commands);

    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadViewsFrom(__DIR__.'/resources/views','crud');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
}
