<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            ['index', 'create', 'edit', 'sidebar'], 'App\Http\View\Composers\CategoryPartialComposer'
        );

        // Using Closure based composers...
        // View::composer('*', function ($view) {
        //     //
        // });
    }
}
