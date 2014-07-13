<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCamposUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users',function(Blueprint $tabla)
        {
            $tabla->string('nombres');
            $tabla->string('apellidos');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('users',function(Blueprint $tabla)
        {
            $tabla->dropColumn('nombres');
            $tabla->dropColumn('apellidos');

        });
	}

}
