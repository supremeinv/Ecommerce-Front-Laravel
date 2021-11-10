<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Products;
class ShopController extends Controller
{


    public function index()
    {
        // prepare data
        $data = array(
            'logo' => Home::getlogodetails(),
        );
        return view('product.shop')->with($data);
    }


    public function details($id=NULL){
        $data = array(
            'logo' => Home::getlogodetails(),
            'product' => Products::singleProduct($id)->first()
        );
        if(empty($data['product']))
            return redirect('shop');
        return view('product.shop-details')->with($data);
    }

}
