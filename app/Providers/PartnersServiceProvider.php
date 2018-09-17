<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class PartnersServiceProvider
 * @package App\Providers
 */
class PartnersServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('view')->composer('page.index', 'App\Http\ViewComposers\PartnersComposer');
    }
}
