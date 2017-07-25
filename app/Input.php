<?php

namespace App;

use Bkwld\Decoy\Models\Base;
use Bkwld\Decoy\Models\Traits\HasImages;

class Input extends Base
{
    // use HasImages;

    /**
     * Validation rules

     * $table->increments('id');
     * $table->timestamps();
     * $table->integer('page_id')->unsigned();
     * $table->foreign('page_id')->references('id')->on('paginas');
     * $table->integer('type_id')->unsigned();
     * $table->foreign('type_id')->references('id')->on('input_types');
     * $table->string('titulo')->nullable();
     * $table->string('contenido');
     * $table->json('options')->nullable();
     * $table->integer('position')->nullable();

     *
     * @var array
     */
    public static $rules = [
        'page_id' => 'exists:paginas,id',
    	'type_id' => 'exists:input_types,id',
        'titulo' => 'max:100',
    	'contenido' => 'required',
    ];

    /**
     * Uploadable attributes
     *
     * @var array
     */
    // protected $upload_attributes = ['pdf'];

    /**
     * Relationships to copy during duplication
     *
     * @var array
     */
    // protected $cloneable_relations = ['photos'];

    /**
     * Relacion con la pagina
     *
     * @return Illuminate\Database\Eloquent\Relations\Relation
     */
    public function pagina()
    {
        return $this->belongsTo('App\Pagina','page_id');
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
     * Tipo de input
     *
     * @return Illuminate\Database\Eloquent\Relations\Relation
     */
    public function input_type()
    {
        return $this->hasOne('InputType');
    }

    /**
     * Reemplazar la funcion que obtiene el titulo
     *
     * @return String
     */
    public function getAdminTitleAttribute(){
        return $this->nombre;
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
     * List all tipos de entrada
     *
     * @return Array
     */
    public static function type_list()
    {
        $tipos = InputType::all();
        $arr = array();

        foreach ($tipos as $cue) {
            $arr[$cue->id] = $cue->nombre;
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
        $this->position = static::where('page_id', $this->page_id )->max('position') + 1;
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
