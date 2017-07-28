<?php

namespace App\Http\Controllers\Admin;

use Bkwld\Decoy\Controllers\Base;

class Portions extends Base
{
    protected $title = 'Portions';

    protected $description = 'Porciones posibles de diferentes alimentos';

    protected $columns = [
        'Title' => 'name',
        'Date' => 'created_at',
    ];
    protected $search = [
        'name',
    ];

}
