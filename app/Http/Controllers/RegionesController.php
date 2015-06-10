<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Regiones;
use Illuminate\Http\Request;
use Input;
use DB;

class RegionesController extends Controller {

	public function provincias($id)
	{
        $provincias = DB::table('provincias')->where('region_id', $id)->get();

        return response()->json($provincias);
		//
	}

}
