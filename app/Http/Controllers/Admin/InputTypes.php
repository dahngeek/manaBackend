<?php

namespace App\Http\Controllers\Admin;

use Bkwld\Decoy\Controllers\Base;

class InputTypes extends Base
{
    /*
     * Example settings
     *
     */
    protected $title = 'Tipos de Input';

    protected $description = 'Estos no se necesitan editar o se verá despues';

    protected $columns = [
        'Nombre' => 'nombre',
        'Descripcion' => 'descripcion',
        'ReturnType' => 'return_type',
        'Date' => 'created_at',
    ];
    protected $search = [
        'nombre',
        'retorno'
    ];

    
}
