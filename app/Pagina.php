<?php

namespace App;

use Bkwld\Decoy\Models\Base;
use Bkwld\Decoy\Models\Traits\HasImages;

class Pagina extends Base
{
    // use HasImages;

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
    	'nombre' => 'required',
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
     * List of all relationships
     *
     * @return Illuminate\Database\Eloquent\Relations\Relation
     */
    public function preguntas()
    {
        return $this->hasMany('App\Input');
    }

    /**
     * Get the cuestionario.
     */
    public function cuestionario()
    {
        return $this->belongsTo('App\Cuestionario');
    }

    /**
     * Get the cuestionario name.
     */
    public function nombre_cuestionario()
    {   
        return $this->cuestionario->nombre;
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
     * List all Cuestionarios to belong
     *
     * @return Array
     */
    public static function cuestionarios_list()
    {
        $cuestionarios = Cuestionario::all();
        $arr = array();

        foreach ($cuestionarios as $cue) {
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
        $this->position = static::where('cuestionario_id', $this->cuestionario_id )->max('position') + 1;
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
    //     return route('pagina', $this->position);
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
