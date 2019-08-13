<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Categories;

class CustomCategoryComposer
{    
    protected $navCategory = [];    
    
    public function __construct(Categories $categories)
    {
        $this->navCategory  = Categories::where('navactive', '=', 1)->get();
        
    }

    public function compose(View $view)
    {
        $view->with('navCategory', $this->navCategory);
    }
}