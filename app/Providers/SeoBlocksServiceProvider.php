<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class SeoBlocksServiceProvider
 * @package App\Providers
 */
class SeoBlocksServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('view')->composer('layouts.app', 'App\Http\ViewComposers\SeoBlocksComposer');
    }
}
