<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subcribe;

class SubcribeController extends Controller
{
    public function index(){
        $subcribe = Subcribe::paginate(10);
        return view('admin.subcribe.index', compact('subcribe'));
    }

    public function destroy(Subcribe $subcribe){
        $subcribe->delete();
        return response()->json([], 204);
    }
}
