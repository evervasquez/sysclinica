<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignTipo2 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('clinicas',function(Blueprint $tabla)
        {
            $tabla->foreign('idtipo')->references('id')->on('tipos');
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
            $tabla->dropForeign('clinicas_idtipo_foreign');
        });
	}

}
