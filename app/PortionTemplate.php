<?php

namespace App;

use Bkwld\Decoy\Models\Base;
use Bkwld\Decoy\Models\Traits\HasImages;

class PortionTemplate extends Base
{
    // use HasImages;

    /**
     * Validation rules
     *
     * $table->string('name');
     * $table->longText('content')->nullable();
     * $table->string('opciones')->nullable();
     * @var array
     */
    public static $rules = [
    	'name' => 'required',
        'content' => 'required',
        'range' => 'required',
    ];


}
