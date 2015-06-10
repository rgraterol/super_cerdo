<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincias extends Model {

    public function region(){
        return $this->belongsTo('Region');
    }

	//
    protected $table = 'provincias';

    protected $fillable = ['provincia_id', 'provincia_nombre', 'region_id'];

}
