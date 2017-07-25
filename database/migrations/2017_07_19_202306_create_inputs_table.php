<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('page_id')->unsigned();
            $table->foreign('page_id')->references('id')->on('paginas');
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('input_types');
            $table->string('titulo')->nullable();
            $table->longText('contenido');
            $table->json('options')->nullable();
            $table->integer('position')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inputs');
    }
}
