<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignTipo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::table('clinicas',function(Blueprint $tabla)
        {
            $tabla->integer('idtipo')->unsigned();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('clinicas',function(Blueprint $tabla)
        {
            $tabla->dropColumn('idtipo');
        });
	}

}
