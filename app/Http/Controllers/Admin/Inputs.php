<?php

namespace App\Http\Controllers\Admin;

use Bkwld\Decoy\Controllers\Base;

class Inputs extends Base
{
    /*
     * Example settings

     *
     */
    protected $title = 'Preguntas';

    protected $description = 'Administrar las preguntas de los cuestionarios';

    protected $columns = [
        'Titulo' => 'titulo',
        'Contenido' => 'contenido',
        'Pagina' => 'nombre_pagina'
        // 'Fecha' => 'created_at',
    ];
    protected $search = [
        'titulo',
        'page_id' => [
            'type' => 'select',
            'label' => 'Pagina',
            'options' => 'App\Input::paginas_list()'
        ],
    ];

}
