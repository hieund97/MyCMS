<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Categories;
use App\Models\Trending;
use Cart;

class HomeController extends Controller
{
    public function index(){
        $featureProduct = Product::where('highlight', '=', 1)->where('status', 1)->latest()->paginate(12);
        
        $saleCategory = Categories::find(22);
        $saleProduct = $saleCategory->product()->where('product.status', 1)->get();
        $activeTrending = Trending::where('active', '=', 1)->get();
        $activeSlider = Slider::where('active', '=', 1)->latest()->get();
       
        return view('client.home.index', compact('featureProduct', 'saleCategory', 'saleProduct', 'activeTrending', 'activeSlider'));
    }

    public function contact(){
        return view('client.home.contact');
    }

    public function about(){
        return view('client.home.about');
    }

    public function member(){
        return view('client.home.membership');
    }

    public function support(){
        return view('client.home.support');
    }

    public function search(Request $request){
        $searchProduct = Product::where('name', 'like', '%'. $request->key . '%')->get();
        return view('client.home.search', compact('searchProduct'));
    }

    

    public function test(Request $request){
        dd($request->all());
    }
}
