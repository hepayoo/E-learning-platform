<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Cat;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        view()->composer('front.inc.header' ,function($view){
        $view ->with('cats' , Cat::select('id','name')->get());
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
