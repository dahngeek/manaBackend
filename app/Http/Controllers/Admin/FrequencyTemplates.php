<?php

namespace App\Http\Controllers\Admin;

use Bkwld\Decoy\Controllers\Base;

class FrequencyTemplates extends Base
{
    /*
     * Example settings
     *
     */
    protected $title = 'Frequency Templates';

    protected $description = 'Textos para las preguntas de frecuencia y las cantidades';

    protected $columns = [
        'Nombre' => 'name',
        'Pregunta' => 'content',
        'Opciones Posibles' => 'opciones',
        'Date' => 'created_at',
    ];
    protected $search = [
        'nombre',
    ];

    
}
