<?php

namespace App\Http\ViewComposers;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Product;

class FilterProductComposer
{    
    // protected $filterProducts = [];
    
    // public function __construct(Request $request, Product $filterProducts)
    // {
    //     $this->filterProducts = Product::whereBetween('price',[substr($request->start, 0, -1),substr($request->end, 0, -1)]);
    // }

    // public function compose(View $view)
    // {
    //     $view->with('filterProducts', $this->filterProducts);
    // }
}