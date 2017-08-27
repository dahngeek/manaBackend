<?php

namespace App\Http\Controllers\Admin;

use Bkwld\Decoy\Controllers\Base;

class Ingredients extends Base
{
    /*
     * Example settings

     *
     */
    protected $title = 'Ingredients';

    protected $description = 'Ingredientes';

    protected $columns = [
        'Title' => 'name',
        'Status' => 'getPublishedStatus',
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
        'date' => 'date',
    ];

}
