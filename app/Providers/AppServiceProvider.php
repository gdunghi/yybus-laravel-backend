<?php

namespace App\Providers;

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
        $this->app->bind('App\Here', 'test');
        $this->app->bind('\App\There', 'test');
        if ($this->app->environment() == 'local') {
        // $this->app->register('Laracasts\Generators\GeneratorsServiceProvider'); // you're using Jeffrey way's generators, too, right?
        $this->app->register('Backpack\Generators\GeneratorsServiceProvider');
         }
    }
}
