<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class WhyWesServiceProvider
 * @package App\Providers
 */
class WhyWesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('view')->composer('page.index', 'App\Http\ViewComposers\WhyWesComposer');
    }
}
