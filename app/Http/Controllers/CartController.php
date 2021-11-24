<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Home;
use App\Models\Deals;
use App\Models\Customers;
use App\Models\Country;
use App\Models\Products;

use App\Models\Order;
use App\Models\Shipping;
use App\Models\OrderDeliveryStatus;

use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;


class CartController extends Controller
{
    protected $userId;
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    #cart page
    public function index(){
        $data = array(
            'logo' => Home::getlogodetails(),
            // 'countries' => Country::get(["co_name", "co_id","co_code"]),
            // 'customer' => Customers::where('cus_id',auth()->user()->cus_id)->first()

        );
        return view('cart/cart')->with($data);
    }

    public function checkout(){
        $data = array(
            'logo' => Home::getlogodetails(),
            'shipping'=> 7.00,
            'countries' => Country::get(["co_name", "co_id","co_code"]),
            // 'customer' => Customers::where('cus_id',auth()->user()->cus_id)->first()

        );
        return view('cart/checkout')->with($data);
    }

    public function store(Request $request){
        $data = array(
            'logo' => Home::getlogodetails(),
            // 'countries' => Country::get(["co_name", "co_id","co_code"]),
            // 'customer' => Customers::where('cus_id',auth()->user()->cus_id)->first()

        );
        return view('cart/cart')->with($data);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $product = Products::where('pro_id','=',$id)->first();

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->pro_title,
                "quantity" => 1,
                "price" => $product->pro_price,
                "image" => $product->pro_img
            ];
        }

        session()->put('cart', $cart);
        return redirect()->route('shop')->with('success', 'Product added to cart successfully!');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function orderPlaced(){
        $data = array(
            'logo' => Home::getlogodetails(),
            // 'countries' => Country::get(["co_name", "co_id","co_code"]),
            // 'customer' => Customers::where('cus_id',auth()->user()->cus_id)->first()

        );
        return view('cart/orderSuccess')->with($data);
    }

}
