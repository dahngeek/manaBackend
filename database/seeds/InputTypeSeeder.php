<?php

use Illuminate\Database\Seeder;

class InputTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //     $table->string('nombre');
        //     $table->string('descripcion');
        //     $table->string('opciones');
        //     $table->string('return_type');
        DB::table('input_types')->insert([
            'nombre' => 'vertical_radio_string',
            'descripcion' => 'Retorna string. Seleccion multiple vertical',
            'return_type' => 'string'
        ]);
        DB::table('input_types')->insert([
            'nombre' => 'vertical_radio_int',
            'descripcion' => 'Retorna int. Seleccion multiple vertical',
            'return_type' => 'int'
        ]);
        DB::table('input_types')->insert([
            'nombre' => 'horizontal_radio_int',
            'descripcion' => 'Retorna int. Seleccion multiple horizontal',
            'return_type' => 'int'
        ]);
        DB::table('input_types')->insert([
            'nombre' => 'text_field',
            'descripcion' => 'Retorna String. Caja de entrada de texto',
            'return_type' => 'string'
        ]);
        DB::table('input_types')->insert([
            'nombre' => 'text_block',
            'descripcion' => 'No retorna nada. Contenido en HTML de texto',
            'return_type' => 'none'
        ]);
    }
}
