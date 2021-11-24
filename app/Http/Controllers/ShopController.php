<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Products;
class ShopController extends Controller
{


    public function index(Request $request)
    {
        // prepare data
        $data = array(
            'logo' => Home::getlogodetails(),
            'products'=> Products::productWithReviews()->paginate(8),
            'categories'=> \App\Models\Category::whereHas('products')->get(),
            'colors'=> \App\Models\Color::whereHas('products')->get(),
            'brands'=> \App\Models\Brand::whereHas('products')->get(),
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

    public function category(Request $request, $id)
    {
        // prepare data
        $data = array(
            'logo' => Home::getlogodetails(),
            'products'=> Products::productWithReviews()->where('pro_mc_id','=',$id)->paginate(8),
            'categories'=> \App\Models\Category::whereHas('products')->get(),
            'colors'=> \App\Models\Color::whereHas('products')->get(),
            'brands'=> \App\Models\Brand::whereHas('products')->get(),
        );
        return view('product.category')->with($data);
    }

}
