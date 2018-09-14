<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class BannersServiceProvider
 * @package App\Providers
 */
class BannersServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('view')->composer('page.index', 'App\Http\ViewComposers\BannersComposer');
    }
}
