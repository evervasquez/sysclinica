<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignPermisos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('permisos',function(Blueprint $tabla)
        {
            $tabla->foreign('idperfil')->references('id')->on('perfils');
            $tabla->foreign('idmodulo')->references('id')->on('modulos');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('permisos',function(Blueprint $tabla)
        {
            $tabla->dropForeign('permisos_idperfil_foreign');
            $tabla->dropForeign('permisos_idmodulo_foreign');
        });
	}

}
