<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Category;
use App\Post;
use App\TextExpander;

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

        view()->composer([
            'category.index',
            'posts.create',
            'posts.edit',
        ], function($view) {
            $view->with('categories', Category::orderBy('title', 'asc')->get());
        });

        view()->composer('posts.archives', function($view) {
            $view->with('archives', Post::archives());
        });

        view()->composer('textExpander.index', function($view) {
            $view->with('snippets', TextExpander::get());
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
