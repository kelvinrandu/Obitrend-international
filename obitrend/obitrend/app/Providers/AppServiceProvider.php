<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
//use Laravel\Passport\HasApiTokens;
use Illuminate\Support\ServiceProvider;
//use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      //  $this->registerPolicies();
      //  Passport::routes();
   Schema::defaultStringLength(191);




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
