<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Categories;

class HomeController extends Controller
{
    public function index(){
        $featureProduct = Product::where('highlight', '=', 1)->paginate(12);

        $newCategory = Categories::find(18);
        $newProduct = $newCategory->product()->paginate(6);
        $saleCategory = Categories::find(19);
        $saleProduct = $saleCategory->product()->inRandomOrder()->paginate(6);
        $activeCate = Categories::where('active', '=', 1)->get();
        $activeSlider = Slider::where('active', '=', 1)->get();
        return view('client.home.index', compact('featureProduct', 'newProduct', 'newCategory', 'saleCategory', 'saleProduct', 'activeCate', 'activeSlider'));
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

    public function test(){
        return view('client.home.test');
    }
}
