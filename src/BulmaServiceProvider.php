<?php

namespace Revolution\Fortify\Bulma;

use Illuminate\Support\ServiceProvider;

class BulmaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'fortify-bulma');

        $this->publishes(
            [
                __DIR__.'/../views' => resource_path('views/vendor/fortify-bulma'),
            ],
            'fortify-bulma'
        );
    }
}
