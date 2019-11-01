<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Trending;

class TrendingComposer
{    
    protected $trending = [];
    
    public function __construct(Trending $trending)
    {
        $this->trending = Trending::all(); 
    }

    public function compose(View $view)
    {
        $view->with('trending', $this->trending);
    }
}