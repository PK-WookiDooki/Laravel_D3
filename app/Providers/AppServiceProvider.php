<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        Blade::if('user', function(){
            return session('auth') ? true : false;
        });

        Blade::if('notUser', function(){
            return session('auth') ? false : true;
        });

        Blade::if('verifying', function(){
            return Request::url() == "http://127.0.0.1:8000/verify_code" ? false : true ;
        });
    }
}
