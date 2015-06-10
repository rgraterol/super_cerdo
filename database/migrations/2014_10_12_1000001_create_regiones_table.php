<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionesTable extends Migration {
    public function up()
    {
        Schema::create('regiones', function(Blueprint $table)
        {
            $table->increments('region_id');
            $table->string('region_nombre');
            $table->string('region_ordinal');
        });
    }

    public function down()
    {
        Schema::drop('regiones');
    }

}
//sudo mysql -u root -p8910735 super_cerdo < database/migrations/regions.sql
//sudo mysql -u root -p8910735 super_cerdo < database/migrations/provincias.sql