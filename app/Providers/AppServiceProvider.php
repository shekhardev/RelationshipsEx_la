<?php

namespace App\Providers;

use App\Repositories\ElequentTodo\ElequentTodo;
use App\Repositories\Todo\TodoRepositories;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(TodoRepositories::class,ElequentTodo::class);
    }
}
