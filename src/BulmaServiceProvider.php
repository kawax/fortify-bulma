<?php

namespace Revolution\Fortify\Bulma;

use Illuminate\Support\ServiceProvider;

class BulmaServiceProvider extends ServiceProvider
{
    protected const TAG = 'fortify-bulma';

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', self::TAG);

        $this->publishes(
            [
                __DIR__.'/../views' => $this->app->resourcePath('views/vendor/'.self::TAG),
            ],
            self::TAG
        );
    }
}
