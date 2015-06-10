<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Regiones;
use Illuminate\Http\Request;
use Input;
use DB;

class RegionesController extends Controller {

	public function provincias()
	{
        $region_id = Input::all()['id'];
        $provincias = DB::table('provincias')->where('region_id', $region_id)->get();
//        $region = Regiones::where('region_id','=', $region_id);
        return response()->json($provincias);
		//
	}

}
