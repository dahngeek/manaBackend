<?php

namespace App;

use Bkwld\Decoy\Models\Base;
use Bkwld\Decoy\Models\Traits\HasImages;

class Portion extends Base
{
    use HasImages;

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
    	'name' => 'required',
    	'images.default' => 'image|required',
    ];

    /**
     * Las preguntas a las que pertenece
     */
    public function foodQuestions()
    {
        return $this->belongsToMany('App\FoodQuestion', 'portion_question', 'portion_id', 'food_question_id');
    }

}
