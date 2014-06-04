<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArreglarDescripcionModulos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('modulos',function(Blueprint $tabla)
        {
            $tabla->renameColumn('descipcion','descripcion');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('modulos',function(Blueprint $tabla)
        {
            $tabla->renameColumn('descripcion','descipcion');
        });
	}

}
