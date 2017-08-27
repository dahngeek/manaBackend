<?php

namespace App\Http\Controllers\Admin;

use Bkwld\Decoy\Controllers\Base;

class IngredientEntries extends Base
{
    /*
     * Example settings
     *
     */
    protected $title = 'Ingredient Entries';

    protected $description = 'Entradas de un ingrediente';

    protected $columns = [
        'Title' => 'title',
        'Fecha de Lanzamiento' => 'release_date',
    ];
    protected $search = [
        'title',
        'fecha de lanzamiento' => 'date',
    ];
}
