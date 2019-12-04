<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index(){
        $comment = Review::where('parent_comment','=',0)->get();
        return view('admin.comment.index', compact('comment'));
    }

    public function edit(Review $review){
        return view ('admin.comment.edit', compact('review'));
    }
}
