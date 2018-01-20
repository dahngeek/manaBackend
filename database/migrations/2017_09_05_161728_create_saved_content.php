<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSavedContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mana_saved_content', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('mana_users');
            $table->integer('ingredient_entry_id')->unsigned();
            $table->foreign('ingredient_entry_id')->references('id')->on('mana_ingredient_entry');
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->integer('saved_type_id')->nullable();
            $table->text('highlight_color')->nullable();
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
        Schema::dropIfExists('mana_saved_content');
    }
}
