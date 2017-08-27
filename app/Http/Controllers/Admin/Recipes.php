<?php

namespace App\Http\Controllers\Admin;

use Bkwld\Decoy\Controllers\Base;

class Recipes extends Base
{
    /*
     * Example settings
     *
     */
    protected $title = 'Recipes';

    protected $description = 'Todas las recetas';

    protected $columns = [
        'Title' => 'name',
        'Description' => 'description',
        'Date' => 'created_at',
    ];
    protected $search = [
        'title',
        'published' => [
            'type' => 'select',
            'label' => 'published status',
            'options' => [
                1 => 'published',
                0 => 'not published',
            ]
        ],
        'active' => [
            'type' => 'select',
            'label' => 'active status',
            'options' => [
                1 => 'active',
                0 => 'not active',
            ]
        ],
        'date' => 'date',
    ];
}
