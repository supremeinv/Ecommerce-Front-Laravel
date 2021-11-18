<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Response;
use Redirect;
use App\Models\{Country, State, City};

class DropdownController extends Controller
{
    public function fetchCountry(Request $request)
    {
        $data['countries'] = Country::get(["co_name", "co_id","co_code"]);
        return response()->json($data);
    }

    public function fetchState(Request $request)
    {
        $data['states'] = State::where("country_code",$request->country_code)->get(["state_name", "state_code","id"]);
        return response()->json($data);
    }

    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("ci_state_code",$request->state_id)->get(["ci_name","ci_id", "ci_state_code"]);
        return response()->json($data);
    }
}
