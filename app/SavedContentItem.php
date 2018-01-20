<?php

namespace App;

use Bkwld\Decoy\Models\Base;

class SavedContentItem extends Base
{
    public $table = "mana_saved_content_item";
    public $timestamps = false;
    /**
     * Validation rules
     *
     * @var array
     */
    // public static $rules = [
    // 	'title' => 'required',
    // 	'slug' => 'alpha_dash|unique:articles',
    // 	'images.default' => 'image|required',
    // 	'images.listing' => 'image',
    // 	'date' => 'required',
    // 	'url' => 'url',
    // ];

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
    public function savedContent()
    {
        return $this->belongsTo('App\SavedContent');
    }
    
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
