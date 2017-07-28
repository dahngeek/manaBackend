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
            'nombre' => 'Radio Vertical (texto/valor)',
            'descripcion' => 'Retorna string. Seleccion multiple vertical',
            'return_type' => 'string'
        ]);
        DB::table('input_types')->insert([
            'nombre' => 'Radios Vertical (Numerica)',
            'descripcion' => 'Retorna int. Seleccion multiple vertical',
            'return_type' => 'int'
        ]);
        DB::table('input_types')->insert([
            'nombre' => 'Radio Horizontal (Numerica)',
            'descripcion' => 'Retorna int. Seleccion multiple horizontal',
            'return_type' => 'int'
        ]);
        DB::table('input_types')->insert([
            'nombre' => 'Campo de Texto',
            'descripcion' => 'Retorna String. Caja de entrada de texto',
            'return_type' => 'string'
        ]);
        DB::table('input_types')->insert([
            'nombre' => 'Bloque de Texto',
            'descripcion' => 'No retorna nada. Contenido en HTML de texto',
            'return_type' => 'none'
        ]);
        DB::table('input_types')->insert([
            'nombre' => 'Switch On/Off',
            'descripcion' => 'Retorna booleano',
            'return_type' => 'bool'
        ]);
    }
}
