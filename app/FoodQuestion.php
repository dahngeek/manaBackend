<?php

namespace App;

use Bkwld\Decoy\Models\Base;
use Bkwld\Decoy\Models\Traits\HasImages;

class FoodQuestion extends Base
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
     * Relationships to copy during duplication
     *
     * @var array
     */
    // protected $cloneable_relations = ['photos'];

    /**
     * The roles that belong to the user.
     */
    public function portions()
    {
        return $this->belongsToMany('App\Portion', 'portion_question', 'food_question_id', 'portion_id');
    }

    /**
     * Relacion con la pagina
     *
     * @return Illuminate\Database\Eloquent\Relations\Relation
     */
    public function pagina()
    {
        return $this->belongsTo('App\Pagina','pagina_id');
    }

    /**
     * Nombre de la pagina
     *
     * @return String
     */
    public function nombre_pagina()
    {
        return $this->pagina->nombre.' ('.$this->pagina->nombre_cuestionario().')';
    }

    /**
     * Template de Frecuencia
     *
     * @return Illuminate\Database\Eloquent\Relations\Relation
     */
    public function frequency_template()
    {
        return $this->hasOne('FrequencyTemplate');
    }

    /**
     * Template de Porciones
     *
     * @return Illuminate\Database\Eloquent\Relations\Relation
     */
    public function portion_template()
    {
        return $this->hasOne('PortionTemplate');
    }

    /**
     * Reemplazar la funcion que obtiene el titulo
     *
     * @return String
     */
    public function getAdminTitleAttribute(){
        return $this->name;
    }

    /**
     * List all Paginas to belong
     *
     * @return Array
     */
    public static function paginas_list()
    {
        $paginas_de_cuestionario = Pagina::all();
        $arr = array();

        foreach ($paginas_de_cuestionario as $cue) {
            $arr[$cue->id] = $cue->nombre.' ('.$cue->nombre_cuestionario().')';
        }
        // \Log::info("------------------------------------->>>>>>>>>>>>>>>");
        // \Log::info($arr);
        // \Log::info("<<<<<<<<<<<<<<<<<<<----------------------------------");
        return $arr;
    }

    /**
     * List all frequency tamplates
     *
     * @return Array
     */
    public static function frequency_template_list()
    {
        $tipos = FrequencyTemplate::all();
        $arr = array();

        foreach ($tipos as $cue) {
            $arr[$cue->id] = $cue->name;
        }
        // \Log::info("------------------------------------->>>>>>>>>>>>>>>");
        // \Log::info($arr);
        // \Log::info("<<<<<<<<<<<<<<<<<<<----------------------------------");
        return $arr;
    }
    
    /**
     * List all frequency tamplates
     *
     * @return Array
     */
    public static function portion_template_list()
    {
        $tipos = PortionTemplate::all();
        $arr = array();

        foreach ($tipos as $cue) {
            $arr[$cue->id] = $cue->name;
        }
        // \Log::info("------------------------------------->>>>>>>>>>>>>>>");
        // \Log::info($arr);
        // \Log::info("<<<<<<<<<<<<<<<<<<<----------------------------------");
        return $arr;
    }

    /**
     * Put new instances at the end
     *
     * @return void
     */
    public function onCreating()
    {
        if (isset($this->position)) return;
        $this->position = static::where('pagina_id', $this->page_id )->max('position') + 1;
    }

    /**
     * Orders instances of this model in the admin as well as default ordering
     * to be used by public site implementation.
     *
     * @param  Illuminate\Database\Query\Builder $query
     * @return void
     */
    public function scopeOrdered($query)
    {
        $query->positioned();
    }

    /**
     * Return the URI to instances of this model
     *
     * @return string A URI that the browser can resolve
     */
    // public function getUriAttribute()
    // {
    //     return route('article', $this->slug);
    // }

    /**
     * Render markup for the "featured" column in the admin listing
     *
     * @return string HTML
     */
    // public function getAdminFeaturedAttribute()
    // {
    //     return $this->featured ? '<span class="badge">Featured</span>' : '';
    // }
}
