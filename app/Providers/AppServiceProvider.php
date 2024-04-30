<?php

namespace App\Providers;

use App\Models\MainCategory;
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
        $mainCats = MainCategory::where('status', 1)->get();

        view()->share([
            'mainCats' => $mainCats,
        ]);
    }
}
