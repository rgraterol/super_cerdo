<?php namespace App\Http\Controllers;

class FacebookController extends Controller {

    public function __construct()
    {
        $this->middleware('guest');
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