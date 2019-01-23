<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//使用schema 方法的时候需要引用类
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //  通过此方法来限制 字符串的长度为191字节
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
