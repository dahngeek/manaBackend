<?php

namespace App;

use Bkwld\Decoy\Models\Base;
// use Bkwld\Decoy\Models\Traits\HasImages;

class User extends Base
{
    // use HasImages;
    public $table = 'mana_users';

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
    	'name' => 'required',
    	'email' => 'email',
    	'profile_pic' => 'url',
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
     * Return the profile Picture of the user.
     *
     * @return string HTML
     */
    public function printProfileImage()
    {
        return $this->profile_pic ? '<img src="'.$this->profile_pic.'"/>' : '<img src="http://placehold.it/100"/>';
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
