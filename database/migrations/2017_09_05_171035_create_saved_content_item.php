<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSavedContentItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mana_saved_content_item', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('saved_content_id')->unsigned();
            $table->foreign('saved_content_id')->references('id')->on('mana_saved_content');
            $table->integer('element_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mana_saved_content_item');
    }
}
