<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Home;
use App\Models\Deals;
use App\Models\Customers;
use App\Models\Country;

class AccountController extends Controller
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

    public function index(){
        $data = array(
            'logo' => Home::getlogodetails(),
            'countries' => Country::get(["co_name", "co_id","co_code"]),
            'customer' => Customers::where('cus_id',auth()->user()->cus_id)->first()
        );
        return view('account/account')->with($data);
    }
}
