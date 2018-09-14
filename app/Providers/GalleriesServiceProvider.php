<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class GalleriesServiceProvider
 * @package App\Providers
 */
class GalleriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('view')->composer('page.index', 'App\Http\ViewComposers\GalleriesComposer');
    }
}
