<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class CatalogsServiceProvider
 * @package App\Providers
 */
class CatalogsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('view')->composer(['page.index', 'page.catalog', 'catalog.index'], 'App\Http\ViewComposers\CatalogsComposer');
    }
}
