<?php namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Response;
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
        $data = Input::all();
        User::create($data);
//        $user = new User($data);
//        $user->save();
//        User::create($data);
        if($_REQUEST->ajax()){
//            Input::get('name')
            $email = 'aaaaaaaa';
            $name = 'name';
//            $id = Input::get('facebook_id');
            $client = new User();
            $client->email = $email;
            $client->name = $name;
            $data = Input::all();
//            $client::create(['email' => 'lol']);
            User::create($data);
            return \Response::json($client);
//            return response()->json($client);
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
