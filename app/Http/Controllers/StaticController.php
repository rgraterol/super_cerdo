<?php namespace App\Http\Controllers;

class StaticController extends Controller {
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('index');
    }

}
