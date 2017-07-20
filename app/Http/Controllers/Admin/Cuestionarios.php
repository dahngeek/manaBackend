<?php

namespace App\Http\Controllers\Admin;

use Bkwld\Decoy\Controllers\Base;

class Cuestionarios extends Base
{
    /*
     * Example settings
     */
    protected $title = 'Cuestionarios';

    protected $description = 'Cuestionarios de frecuencia Alimentaria.';

    protected $columns = [
        'Title' => 'nombre',
        // 'Status' => 'getAdminFeaturedAttribute',
        'Date' => 'created_at',
    ];
    protected $search = [
        'Title'=>'nombre',
        // 'featured' => [
        //     'type' => 'select',
        //     'label' => 'featured status',
        //     'options' => [
        //         1 => 'featured',
        //         0 => 'not featured',
        //     ]
        // ],
        // 'category' => [
        //     'type' => 'select',
        //     'options' => 'App\Article::$categories',
        // ],
        'date' => 'created_at',
    ];

}
