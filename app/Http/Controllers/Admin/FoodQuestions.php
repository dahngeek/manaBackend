<?php

namespace App\Http\Controllers\Admin;

use Bkwld\Decoy\Controllers\Base;

class FoodQuestions extends Base
{
    /*
     * Example settings

     *
     */
    protected $title = 'Preguntas';

    protected $description = 'Administrar las preguntas de los cuestionarios';

    protected $columns = [
        'Alimento' => 'name',
        'Contenido' => 'content',
        'Pagina' => 'nombre_pagina'
        // 'Fecha' => 'created_at',
    ];
    protected $search = [
        'titulo',
        'pagina_id' => [
            'type' => 'select',
            'label' => 'Pagina',
            'options' => 'App\FoodQuestion::paginas_list()'
        ],
    ];
}
