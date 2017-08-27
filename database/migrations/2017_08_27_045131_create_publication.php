<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mana_publication', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('publication_type_id')->unsigned();
            $table->foreign('publication_type_id')->references('id')->on('mana_publication_type');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('mana_users');
            $table->text('content')->nullable();
            $table->string('secondary_title')->nullable();
            $table->string('external_link')->nullable();
            $table->string('link_text')->nullable();
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
        Schema::dropIfExists('mana_publication');
    }
}
