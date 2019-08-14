<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Categories;

class CategoryComposer
{    
    protected $categories = [];
    protected $parentCate = [];
    
    public function __construct(Categories $categories, Categories $p_cate_slug)
    {
        $this->categories = Categories::all(); 
        $this->parentCate = Categories::where('parent_id', '=', 0)->get();
    }

    public function compose(View $view)
    {
        $view->with('categories', $this->categories);
        $view->with('parentCate', $this->parentCate);
    }
}