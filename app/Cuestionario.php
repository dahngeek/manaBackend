<?php

namespace App;

use Bkwld\Decoy\Models\Base;
use Bkwld\Decoy\Models\Traits\HasImages;

class Cuestionario extends Base
{
    protected $dates = ['created_at', 'updated_at'];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
    	'nombre' => 'required',
    	'slug' => 'alpha_dash|unique:cuestionarios',
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
    public function paginas()
    {
        return $this->hasMany('Pagina');
    }

    /**
     * Put new instances at the end
     *
     * @return void
     */
    // public function onCreating()
    // {
    //     if (isset($this->position)) return;
    //     $this->position = static::max('position') + 1;
    // }

    /**
     * Orders instances of this model in the admin as well as default ordering
     * to be used by public site implementation.
     *
     * @param  Illuminate\Database\Query\Builder $query
     * @return void
     */
    public function scopeOrdered($query)
    {
        $query->orderBy('created_at', 'desc');
    }

    /**
     * Return the URI to instances of this model
     *
     * @return string A URI that the browser can resolve
     */
    public function getUriAttribute()
    {
        return route('cuestionario', $this->slug);
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
     * Render markup for the "featured" column in the admin listing
     *
     * @return string HTML
     */
    // public function getAdminFeaturedAttribute()
    // {
    //     return $this->featured ? '<span class="badge">Featured</span>' : '';
    // }
}
