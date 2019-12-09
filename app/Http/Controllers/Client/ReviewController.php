<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Guest;
use App\Models\Reply;
use App\Models\Review;

class ReviewController extends Controller
{
    public function storeAsMember(Request $request){
        $memberReview = Review::create([
            'content' => $request->content,
            'user_id' => $request->userid,
            'product_id' => $request->productid
        ]);
        session()->flash('comment', 'success');
        return redirect()->back();
    }

    public function storeAsGuest(Request $request){
        $guest = Guest::create([
            'client_name' => $request->name,
            'email' => $request->email,
        ]);
        $guest->save();

        $guestReview = Review::create([
            'guest_id' => $guest->id,
            'content' => $request->content,
            'product_id' => $request->productid
        ]);
        session()->flash('comment', 'success');
        return redirect()->back();
    }

    public function guestReply(Request $request, $id){
        $guest = Guest::create([
            'client_name' => $request->name,
            'email' => $request->email,
        ]);
        $guest->save();
        $guestReply = Reply::create([
            'content' => $request->content,
            'comment_id' => $id,
            'guest_id' => $guest->id,
        ]);
        session()->flash('reply', 'success');
        return redirect()->back();
    }

    public function memReply(Request $request, $id){
        $memReply = Reply::create([
            'content' => $request->content,
            'comment_id' => $id,
            'user_id' => $request->userid
        ]);
        session()->flash('reply', 'success');
        return redirect()->back();
    }
}
