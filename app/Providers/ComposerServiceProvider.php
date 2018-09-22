<?php

namespace App\Providers;

use App\Http\ViewComposers\AreaComposer;
use Illuminate\Support\ServiceProvider;
use  \Illuminate\Support\Facades\View;
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*',AreaComposer::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AreaComposer::class);
    }
}
