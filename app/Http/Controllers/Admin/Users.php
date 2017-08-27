<?php

namespace App\Http\Controllers\Admin;

use Bkwld\Decoy\Controllers\Base;

class Users extends Base
{
    /*
     * Example settings
     *
     */
    protected $title = 'Users';

    protected $description = 'Todoos los usuarios';

    protected $columns = [
        'Nombre' => 'name',
        'Imagen de Perfil' => 'printProfileImage',
        'Fecha de Registro' => 'created_at',
    ];
    protected $search = [
        'fecha de registro' => 'date',
    ];

    
}
