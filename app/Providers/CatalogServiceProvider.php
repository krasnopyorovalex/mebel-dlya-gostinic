<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class CatalogServiceProvider
 * @package App\Providers
 */
class CatalogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('view')->composer('page.index', 'App\Http\ViewComposers\CatalogsComposer');
    }
}
