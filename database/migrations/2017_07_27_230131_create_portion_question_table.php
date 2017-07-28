<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortionQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portion_question', function (Blueprint $table) {
            $table->integer('portion_id')->unsigned();
            $table->foreign('portion_id')->references('id')->on('portions');
            $table->integer('food_question_id')->unsigned();
            $table->foreign('food_question_id')->references('id')->on('food_questions');
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
        Schema::dropIfExists('portion_question');
    }
}
