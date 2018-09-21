<?php

namespace App\Providers;

use App\Area;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Area::creating(function ($area){

            $prefix = $area->parent ? $area->parent->name.' ' : '';
            $area->slug  = str_slug($prefix.$area->name);

        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
