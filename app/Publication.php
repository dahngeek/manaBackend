<?php

namespace App;

use Bkwld\Decoy\Models\Base;
use Bkwld\Decoy\Models\Traits\HasImages;

class Publication extends Base
{
    use HasImages;
    public $table='mana_publication';

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
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function publicationType()
    {
        return $this->belongsTo('App\PublicationType');
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
     * Get author name
     *
     * @return string HTML
     */
    public function getAuthor()
    {
        return $this->user->name;
    }

    public function getPublicationType()
    {
        return $this->publicationType->name;
    }
}
