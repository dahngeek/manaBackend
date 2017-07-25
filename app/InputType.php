<?php

namespace App;

use Bkwld\Decoy\Models\Base;
use Bkwld\Decoy\Models\Traits\HasImages;

class InputType extends Base
{
    // use HasImages;

    /**
     * Validation rules
     *
     * $table->increments('id');
     * $table->string('nombre');
     * $table->string('descripcion')->nullable();
     * $table->string('opciones')->nullable();
     * $table->string('return_type');
     * $table->timestamps();
     * @var array
     */
    public static $rules = [
    	'nombre' => 'required',
        'return_type' => 'required',
    ];


}
