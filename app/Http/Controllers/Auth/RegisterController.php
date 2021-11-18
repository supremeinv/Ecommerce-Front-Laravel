<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Customers;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Country;
use App\Models\Home;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        $data['logo'] = Home::getlogodetails();
        $data['countries'] = Country::get(["co_name", "co_id","co_code"]);
        return view("auth.register", $data);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'cus_name' => ['required', 'string', 'max:255'],
            'cus_email' => ['required', 'string', 'email', 'max:255', 'unique:nm_customer'],
            'cus_pwd' => ['required', 'string', 'min:8', 'confirmed'],
            'cus_country' => ["required"],
            'cus_state' => ["required"],
            'cus_city' => ["required"],
            'cus_phone' => ["required","numeric","digits:10"],
            'terms' => ["accepted"]

        ],[
            'cus_name.required'  => "Customer Name is Required",
            'cus_email.required'  => "Customer Email is Required",
            'cus_pwd.required'  => "Customer Password is Required",
            'cus_pwd.confirmed'  => "Confirm Password Must Match",
            "cus_country.required" => "Country Name is Required",
            'cus_state.required'  => "State Name is Required",
            'cus_city.required'  => "City Name is Required",
            'cus_phone.required'  => "Customer Phone is Required",
            'cus_phone.numeric'  => "Customer Phone must be numeric",
            'cus_phone.digits'  => "Customer Phone must be 10 digits",
            'terms.accepted' => "Terms & Conditions Must be Accepted"
        ]);
    }

    /**
     * Create a new Customers instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Customers
     */
    protected function create(array $data)
    {
        return Customers::create([
            'cus_name' => $data['cus_name'],
            'cus_email' => $data['cus_email'],
            'cus_pwd' => Hash::make($data['cus_pwd']),
        ]);
    }
}
