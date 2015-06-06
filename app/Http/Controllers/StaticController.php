<?php namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Input;
use Request;

class StaticController extends Controller {
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('index');
    }

    public function  store()
    {
        $validator = Validator::make($data = Input::all(), User::$rules);

        if ($validator->fails())
        {
            return response()->json(['false']);
        }
        $client = new User($data);
        $client->save();
        return response()->json($client);

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
