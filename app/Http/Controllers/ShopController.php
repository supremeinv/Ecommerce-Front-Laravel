<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{


    public function index()
    {
        return view('product.shop');
    }


    public function details(){
        return view('product.shop-details');
    }

    public function checkout(){
        return view('product.checkout');
    }
}
