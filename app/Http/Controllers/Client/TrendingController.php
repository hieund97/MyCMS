<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Trending;

class TrendingController extends Controller
{
    public function index($slug){
        $trend = Trending::where('slug', $slug)->firstOrFail();
       
        $trendProduct = $trend->product()->paginate(12); 
        return view ('client.trending.index', compact('trend', 'trendProduct'));
    }
}
