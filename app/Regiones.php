<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Regiones extends Model {

    public function provincias(){
        return $this->hasMany('Provincias', 'region_id');
    }
	//
    protected $table = 'regiones';

    protected $fillable = ['regiones_id', 'region_nombre', 'region_id'];

}
