<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Category;

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
     view()->composer('category.index', function($view) {
         $view->with('categories', Category::orderBy('id', 'asc')->get());
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
