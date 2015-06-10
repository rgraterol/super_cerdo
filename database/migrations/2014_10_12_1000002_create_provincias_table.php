<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvinciasTable extends Migration {
    public function up()
    {
        Schema::create('provincias', function(Blueprint $table)
        {
            $table->increments('provincia_id');
            $table->string('provincia_nombre');
            $table->string('region_id');
        });
    }

    public function down()
    {
        Schema::drop('provincias');
    }

}
//sudo mysql -u root -pPASSWORD super_cerdo < database/migrations/regions.sql
//sudo mysql -u root -pPASSWORD super_cerdo < database/migrations/provincias.sql