<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_conductores', function (Blueprint $table) {
            $table->engine="InnoDB";

            $table->bigIncrements('Con_id');

            $table->string('Con_nombre');
            $table->string('Con_apellido');
            $table->bigInteger('Con_telefono');
            $table->string('Con_direccion');
            $table->bigInteger('Con_n_pase');
            $table->string('Con_c_pase');
            $table->bigInteger('Con_n_documento');
            $table->string('Con_c_documento');
            $table->string('Con_c_hoja_vida');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conductores');
    }
};
