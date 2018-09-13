<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TextBlockServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('view')->composer('layouts.app', 'App\Http\ViewComposers\TextBlockComposer');
    }
}
