<?php

namespace App;

use Bkwld\Decoy\Models\Base;
use Bkwld\Decoy\Models\Traits\HasImages;

class PublicationType extends Base
{
    use HasImages;
    public $table = 'mana_publication_type';
    public $timestamps = false;
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'description' => 'required',
    	'images.default' => 'image',
    ];
    
    /**
     * List all Users
     *
     * @return Array
     */
    public static function publicationtype_list()
    {
        $tipos = PublicationType::all();
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
    // public function blocks()
    // {
    //     return $this->hasMany('Block');
    // }

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
    // public function scopeOrdered($query)
    // {
    //     $query->positioned();
    // }

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
