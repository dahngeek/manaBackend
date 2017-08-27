<?php

namespace App\Http\Controllers\Admin;

use Bkwld\Decoy\Controllers\Base;

class PublicationTypes extends Base
{
    /*
     * Example settings
     *
     */
    protected $title = 'Publication Types';

    protected $description = 'Tipos de post.';

    protected $columns = [
        'Title' => 'name',
        'Description' => 'description',
    ];
    protected $search = [
        'title',
    ];

}
