<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banners;
use App\Models\Home;
use App\Models\Deals;
use App\Models\Products;
use App\Models\Reviews;

class HomeController extends Controller
{

    public function index()
    {
        // prepare data
        $data = array(
            'banners' => Banners::all(),
            'logo' => Home::getlogodetails(),
            'deals' => Deals::all(),
            'products' => Products::productWithReviews()->get(),
            'featuredProducts' => Products::featuredProductWithReviews()->get(),
            'favoriteProducts' => Products::favoriteProducts()->get()
        );
        return view('home')->with($data);
    }

    public function clearCache()
    {
        \Artisan::call('cache:clear');
        return view('clear-cache');
    }

}
