<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\View\Composers\ProfileComposer;
use Illuminate\Support\Facades\Blade;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('globalKey', 'kritika.thakur@nuware.com');


        // Using closure based composers...
        // View::composer(['admin.header','greeting'], function ($view) {
        // //     // View::share('globalKey', 'kritika.thakur@nuware.com');
        // $view->with('amount',500);
        // //     //
        // });

        // Using class based composers...
        // View::composer('admin.profile', ProfileComposer::class);   
         View::composer('app', ProfileComposer::class);

        // Blade::withoutDoubleEncoding();
    }
}
