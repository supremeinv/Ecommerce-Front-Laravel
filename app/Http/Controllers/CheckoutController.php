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
use App\Models\OrderCod;
use App\Models\Shipping;
use App\Models\OrderDeliveryStatus;

use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;


class CheckoutController extends Controller
{
    protected $userId;
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function index(Request $request){
        foreach(session('cart') as $id => $details):
            $data = array(
                'cod_transaction_id' => 'ORDER'.uniqid() ,
                'cod_cus_id' => Auth::user()->cus_id,
                'cod_pro_id' => $id,
                'cod_prod_unitPrice' => $details['price'],
                'cod_order_type' => 1,
                'cod_delivery_type' =>'shipping',
                'cod_qty' => $details['quantity'],
                'cod_amt' => $details['quantity'] * $details['price'],
                'cod_tax' => 0,
                'cod_taxAmt' =>0,
                'cod_status' =>1,
                'delivery_status' =>1,
                'status_ordered_date' =>date('Y-m-d h:i:s', time()),
                'status_pack_date' =>date('Y-m-d h:i:s', time()),
                'status_dispatch_date' => date('Y-m-d h:i:s', time()),
                'status_delivered_date' => date('Y-m-d h:i:s', time()),
                'status_cancel_initiate_date' => date('Y-m-d h:i:s', time()),
                'status_cancelled_date'  => date('Y-m-d h:i:s', time()),
                'created_date'  => date('Y-m-d h:i:s', time()),
                'cod_paytype' => 0,
                'cod_pro_color' => 0,
                'cod_pro_size' => 0,
                'cod_shipping_amt' => 0,
                'cod_ship_addr' =>0,
                'cod_merchant_id' => 0,
                'coupon_code' => 0,
                'coupon_type' => 0,
                'coupon_amount_type' => 0,
                'coupon_amount' => 0,
                'coupon_total_amount' => 0,
                'wallet_amount' => 0,
                'cod_prod_actualprice' => 0,
                'mer_commission_amt' => 0,
                'mer_amt' => 0
            );
            OrderCod::create($data);
        endforeach;
        $data = array(
            'logo' => Home::getlogodetails(),
            // 'countries' => Country::get(["co_name", "co_id","co_code"]),
            // 'customer' => Customers::where('cus_id',auth()->user()->cus_id)->first()

        );
        return view('cart/orderSuccess')->with($data);
    }
}
