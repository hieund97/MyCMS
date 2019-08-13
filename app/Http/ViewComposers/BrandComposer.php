<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Brand;

class BrandComposer
{    
    protected $brands = [];
    
    public function __construct(Brand $brands)
    {
        $this->brands = Brand::all(); 
    }

    public function compose(View $view)
    {
        $view->with('brands', $this->brands);
    }
}