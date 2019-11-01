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
        // Category Variable
        View::composer(
            '*', 'App\Http\ViewComposers\CategoryComposer'
        );

        // Attribute Variable
        View::composer(
            '*', 'App\Http\ViewComposers\AttributeComposer'
        );

        // Brand Variable
        View::composer(
            '*', 'App\Http\ViewComposers\BrandComposer'
        );

        // Custom Category Variable
        View::composer(
            '*', 'App\Http\ViewComposers\CustomCategoryComposer'
        );

        // Hot Blog Category Variable
        View::composer(
            '*', 'App\Http\ViewComposers\HotBlogCategoryComposer'
        );

        // User Variable
        View::composer(
            '*', 'App\Http\ViewComposers\UserComposer'
        );

        // Trending Variable
        View::composer(
            '*', 'App\Http\ViewComposers\TrendingComposer'
        );
        
    }
}
