<?php

namespace App\Http\Controllers\Admin;

use Bkwld\Decoy\Controllers\Base;

class SavedContents extends Base
{
    /*
     * Saved Contents

     *
     */
    protected $title = 'Elementos Guardados';

    protected $description = 'Elementos guardados por los usuarios.';

    protected $columns = [
        'Title' => 'title',
        'Author' => 'getAuthor',
        'Ingredient' => 'ingredient',
        'Date' => 'created_at',
    ];
    protected $search = [
        'Author',
        'date' => 'date',
    ];

}
