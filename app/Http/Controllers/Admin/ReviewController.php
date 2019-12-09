<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index(){
        $comment = Review::where('block', 0)->get();
        return view('admin.comment.index', compact('comment'));
    }

    public function listBlock(){
        $listBlock = Review::where('block', 1)->get();
        return view('admin.comment.block', compact('listBlock'));
    }

    public function edit(Review $review){
        return view ('admin.comment.edit', compact('review'));
    }

    public function block($id){
        $block = Review::find($id);
        $block->update([
            'block' => 1
        ]);
    }

    public function unblock($id){
        $unBlock = Review::find($id);
        $unBlock->update([
            'block' => 0
        ]);
    }

    public function destroy($id){
        $review = Review::find($id);
        $review->delete();
        return response()->json([], 204);
    }
}
