<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('position')->nullable();
            $table->timestamps();
            //relacion con pagina
            $table->integer('pagina_id')->unsigned();
            $table->foreign('pagina_id')->references('id')->on('paginas');
            //info
            $table->string('name');
            $table->longText('examples')->nullable();
            //relacion con template pregunta frequencia
            $table->integer('frequency_template_id')->unsigned();
            $table->foreign('frequency_template_id')->references('id')->on('frequency_templates');
            //contenido adicional a la pregunta/plantilla
            $table->longText('content')->nullable();
            //relacion con las porciones plantilla
            $table->integer('portion_template_id')->unsigned();
            $table->foreign('portion_template_id')->references('id')->on('portion_templates');
            //contenido adicional al as porciones
            $table->longText('portions_content')->nullable();
            $table->boolean('hasTypes')->default(false);
            $table->longText('types_text')->nullable();
            $table->string('types')->nullable();
            $table->json('opciones')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_questions');
    }
}
