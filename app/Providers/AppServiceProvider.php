<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; // Import the View facade
use DB;
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
        //
        $categories = DB::table('categories')
                ->select(
                    'categories.id as id',
                    'categories.name as name',
                    'categories.img_path as img',
                )->get();
        

        View::share('categories', $categories);
              
    }
}
