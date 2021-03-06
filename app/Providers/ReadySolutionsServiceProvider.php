<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ReadySolutionsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('view')->composer('page.index', 'App\Http\ViewComposers\ReadySolutionComposer');
    }
}
