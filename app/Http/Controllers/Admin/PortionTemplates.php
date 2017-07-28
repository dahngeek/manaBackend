<?php

namespace App\Http\Controllers\Admin;

use Bkwld\Decoy\Controllers\Base;

class PortionTemplates extends Base
{
    /*
     * Example settings
     *
     */
    protected $title = 'Portion Template';

    protected $description = 'Los textos para las preguntas de porciones y las cantidades';

    protected $columns = [
        'Nombre' => 'name',
        'Pregunta' => 'content',
        'Rango' => 'opciones',
        'Date' => 'created_at',
    ];
    protected $search = [
        'nombre',
    ];

    
}
