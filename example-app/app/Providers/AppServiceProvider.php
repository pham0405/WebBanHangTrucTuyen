<?php

namespace App\Providers;


use App\View\Components\CartComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

use Illuminate\Support\Facades\View;


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


public function boot()
{
    Blade::directive('title', function ($title) {
        return "<?php view()->share('title', $title); ?>";
    });
   
}

}
