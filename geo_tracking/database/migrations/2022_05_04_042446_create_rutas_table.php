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
        Schema::create('m_rutas', function (Blueprint $table) {
            $table->engine="InnoDB";

            $table->bigIncrements('Rut_id');
            $table->bigInteger('Rut_Con_id')->unsigned();

            $table->string('Rut_cordenadas');
            $table->timestamp('Rut_fecha');

            $table->timestamps();

            $table->foreign('Rut_Con_id')->references('Con_id')->on('m_conductores')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_rutas');
    }
};
