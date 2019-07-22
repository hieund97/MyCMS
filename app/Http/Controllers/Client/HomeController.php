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
        $featureProduct = Product::where('highlight', '=', 1)->paginate(6);

        $newCategory = Categories::find(18);
        $newProduct = $newCategory->product()->paginate(3);
        $saleCategory = Categories::find(19);
        $saleProduct = $saleCategory->product()->paginate(3);
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
}
