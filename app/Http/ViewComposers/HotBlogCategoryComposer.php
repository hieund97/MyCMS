<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Blog;

class HotBlogCategoryComposer
{    
    protected $hots = [];    
    
    public function __construct(Blog $hots)
    {
        $this->hots  = Blog::where('category_id', '=', 2)->paginate(3);
        
    }

    public function compose(View $view)
    {
        $view->with('hots', $this->hots);
    }
}