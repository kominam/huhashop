<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Product;
use App\Category;
use Auth;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        /*View::composer(
            'profile', 'App\Http\ViewComposers\ProfileComposer'
        );*/

        // Using Closure based composers...
        View::composer('*', function ($view) {
            $all_categories =  Category::all();
            $view->with('all_categories', $all_categories);
        });
        View::composer('*', function ($view) {
            $all_products = Product::all();
            $view->with('all_products', $all_products);
        });
        View::composer('frontend._references.modal_order', function ($view) {
            $orders = Auth::user()->orders;
            $view->with('orders', $orders);
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}