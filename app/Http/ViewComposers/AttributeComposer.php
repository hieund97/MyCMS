<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Attribute;

class AttributeComposer
{    
    protected $attribute = [];
    
    public function __construct(Attribute $attribute)
    {
        $this->attribute = Attribute::all(); 
    }

    public function compose(View $view)
    {
        $view->with('attribute', $this->attribute);
    }
}