<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraellaProgramaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graella_programa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('graella_id')->unsigned();
            $table->bigInteger('programa_id')->unsigned();

            $table->foreign('graella_id')->references('id')->on('graellas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('programa_id')->references('id')->on('programas')
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
        Schema::dropIfExists('graella_programa');
    }
}
