<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Reply;
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

    public function detail(Review $review){
        $reply = $review->reply;
        return view ('admin.comment.detail', compact('review', 'reply'));
    }

    public function reply(Request $request){
        $reply = Reply::create([
            'content' => $request->content,
            'comment_id'=> $request->commentid,
            'user_id' => $request->userid
        ]);
        session()->flash('reply', 'success');
        return redirect()->back();
    }

    public function repBlock($id){
        $repBlock = Reply::find($id);
        $repBlock->update([
            'block' => 1
        ]);
    }

    public function unRepBlock($id){
        $unRepBlock = Reply::find($id);
        $unRepBlock->update([
            'block' => 0
        ]);
    }

    public function destroyReply($id){
        $delReply = Reply::find($id);
        $delReply->delete();
        return response()->json([], 204);
    }

}
