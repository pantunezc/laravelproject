<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('canal_id')->unsigned();
            $table->bigInteger('graella_id')->unsigned();
            $table->string('descropcio');
            $table->string('tipus');
            $table->string('classificacio');
            $table->string('nom');

            $table->foreign('canal_id')->references('id')->on('canals')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('graella_id')->references('id')->on('graellas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programas');
    }
}
