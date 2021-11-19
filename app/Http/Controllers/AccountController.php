<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule; //import Rule class

use App\Models\Home;
use App\Models\Deals;
use App\Models\Customers;
use App\Models\Country;
use App\Models\State;
use App\Models\City;

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

    public function index()
    {
        $data = array(
            'logo' => Home::getlogodetails(),
            'countries' => Country::get(["co_name", "co_id", "co_code"]),
            'states' => State::get(["state_name", "state_code", "id"]),
            'cities' => City::get(["ci_name", "ci_id", "ci_state_code"]),
            'customer' => Customers::where('cus_id', auth()->user()->cus_id)->first()
        );
        return view('account/account')->with($data);
    }

    public function store(Request $request)
    {
        // validate data
       $validator = $this->validator($request);

        if ($validator->fails()) {
            dd($validator->messages());
            return redirect()->back()->withInput()->with('error', $validator->messages());
        }

        try {
            // store sms transaction group
            $account = Customers::where('cus_id', auth()->user()->cus_id)
            ->update([
                'cus_name' => $request->cus_name,
                'cus_email' => $request->cus_email,
                'cus_pwd' => $request->cus_pwd != null ? Hash::make($request->cus_pwd) : Customers::where('cus_id', auth()->user()->cus_id)->first()->cus_pwd,
                'cus_country' => $request->cus_country,
                'cus_state' => $request->cus_state,
                'cus_city' => $request->cus_city,
                'cus_phone' => $request->cus_phone,
                'cus_pic' => $this->storeImage($request)
            ]);

            //Storing single transaction data
            if ($account)
                return redirect()->back()->with('message','Account Updated');
            else
                return false;
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator($request)
    {
        $id =auth()->user()->cus_id;
        return Validator::make($request->all(), [
            'cus_name' => ['required', 'string', 'max:255'],
            'cus_email' => ['required', 'string', 'email', 'max:255', Rule::unique('nm_customer','cus_email')->ignore($id,'cus_id')],
            'cus_pwd' => ['required', 'string', 'min:8'],
            'cus_country' => ["required"],
            'cus_state' => ["required"],
            'cus_city' => ["required"],
            'cus_phone' => ["required", "numeric", "digits:10"]

        ], [
            'cus_name.required'  => "Customer Name is Required",
            'cus_email.required'  => "Customer Email is Required",
            'cus_pwd.required'  => "Customer Password is Required",
            "cus_country.required" => "Country Name is Required",
            'cus_state.required'  => "State Name is Required",
            'cus_city.required'  => "City Name is Required",
            'cus_phone.required'  => "Customer Phone is Required",
            'cus_phone.numeric'  => "Customer Phone must be numeric",
            'cus_phone.digits'  => "Customer Phone must be 10 digits",
        ]);
    }

    public function storeImage($request)
    {
        $image_path = NULL;
        if ($request->file()) {
            $request->validate([
                'file' => 'required|mimes:png,jpg,jpeg,gif|max:4096'
            ]);
            $name = time() . '_' . $request->file->getClientOriginalName();
            $image_path =  $request->file->move(public_path('images'), str_replace(' ', '', $name));
            $image_path = str_replace(public_path(),'',$image_path);
        }
        return $image_path;
    }
}
