<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PuliendoUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users',function(Blueprint $tabla)
        {
            $tabla->string('telefono',20);
            $tabla->string('direccion');
            $tabla->string('ciudad');
            $tabla->string('distrito');
            $tabla->string('web');
            $tabla->string('facebook');
            $tabla->string('linkedin');
            $tabla->string('google');
            $tabla->string('twitter');

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
            $tabla->dropColumn(array('telefono','direccion','ciudad','distrito',
                'web','facebook','linkedin','google','twitter'));

        });
	}

}
