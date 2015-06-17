<?php namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Input;
use Request;
use DB;

class StaticController extends Controller {
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
//        $regions = \App\Regiones::lists('region_nombre','region_id');
        $regiones = DB::table('regiones')->get();
//        $regions = ['' => ''] + \App\Regiones::lists('region_nombre', 'region_id');
        return view('index', $regiones);
    }

    public function  store()
    {
        $validator = Validator::make($data = Input::all(), User::$rules);

        if ($validator->fails())
        {
            return response()->json(['false']);
        }else{
            echo $data->birtday;
            $client = new User($data);
            $client->save();
            return response()->json($client);
        }
    }


    public function redirectToProvider()
    {
        return Socialize::with('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialize::with('facebook')->user();
    }

}
