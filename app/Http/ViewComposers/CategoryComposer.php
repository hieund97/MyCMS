<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Categories;

class CategoryComposer
{    
    protected $categories = [];
    
    public function __construct(Categories $categories)
    {
        $this->categories = Categories::all(); 
    }

    public function compose(View $view)
    {
        $view->with('categories', $this->categories);
    }
}