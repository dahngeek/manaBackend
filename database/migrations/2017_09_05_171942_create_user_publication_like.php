<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPublicationLike extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mana_user_publication_like', function (Blueprint $table) {
            $table->integer('publication_id')->unsigned();
            $table->foreign('publication_id')->references('id')->on('mana_publication');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('mana_user');
            $table->timestamps();

            $table->index(['publication_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mana_user_publication_like');
    }
}
