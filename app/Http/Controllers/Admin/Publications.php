<?php

namespace App\Http\Controllers\Admin;

use Bkwld\Decoy\Controllers\Base;

class Publications extends Base
{
    /*
     * Example settings
     *
     */
    protected $title = 'Publications';

    protected $description = 'Todo lo que aparecerá en la pantalla de inicio.';

    protected $columns = [
        'Contenido' => 'content',
        'Author' => 'getAuthor',
        'Type' => 'getPublicationType',
        'Date' => 'created_at',
    ];
    protected $search = [
        'type' => [
            'type' => 'select',
            'label' => 'publication type',
            'options' => 'App\PublicationType::publicationtype_list()'
        ],
        'date' => 'date',
    ];
}
