<?php

namespace App\Http\Controllers\Admin;

use Bkwld\Decoy\Controllers\Base;

class Paginas extends Base
{
    /*
     * Example settings
     *
     */
    protected $title = 'Paginas';

    protected $description = 'Paginas de un cuestionario.';

    protected $columns = [
        'Titulo' => 'nombre',
        'Descripcion' => 'description',
        'Cuestionario' => 'nombre_cuestionario',
        'Fecha' => 'created_at',
    ];
    protected $search = [
        'nombre',
        'description',
        // 'featured' => [
        //     'type' => 'select',
        //     'label' => 'featured status',
        //     'options' => [
        //         1 => 'featured',
        //         0 => 'not featured',
        //     ]
        // ],
        'cuestionario_id' => [
            'type' => 'select',
            'label' => 'Cuestionario',
            'options' => 'App\Pagina::cuestionarios_list()'
        ],
        'date' => 'date',
    ];

}
