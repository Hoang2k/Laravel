<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()

    {
        view()->composer('admin.index',function($view){
            $category=category::all();
            $view->with('category',$category);
        });
       

    }
}
