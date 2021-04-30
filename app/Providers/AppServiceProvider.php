<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        // Using class based composers...
        View::composer('frontend.includes.header', function ($view) {
            $categories = Category::where('status', 1)->take(6)->get();
//            dd($categories);
           $view->with('categories', $categories);
        });

//        View::composer('*', function ($view) {
//           $view->with('count', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa');
//        });

    }
}
