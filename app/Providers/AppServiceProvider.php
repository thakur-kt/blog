<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Middleware\TerminatingMiddleware;
use App\Billing\PaymentGatewayContract;
use App\Billing\BankPaymentGateway;
use App\Billing\CreditPaymentGateway;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Database\Eloquent\Model;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->singleton(TerminatingMiddleware::class);
        //    $this->app->bind(PaymentGateway::class,function($app){
        //        return new PaymentGateway('usd') ;

        //    });
        $this->app->singleton(PaymentGatewayContract::class,function($app){

           if( request()->type=='bank'){

            return new BankPaymentGateway('usd') ;

           }
            return new CreditPaymentGateway('eur');

        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // View::share('globalKey', 'kritika.thakur@nuware.com');
               

    }
}
