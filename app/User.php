<?php

namespace App;

use Bkwld\Decoy\Models\Base;
// use Bkwld\Decoy\Models\Traits\HasImages;

class User extends Base
{
    // use HasImages;
    public $table = 'mana_user';

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
     * List all Users
     *
     * @return Array
     */
    public static function users_list()
    {
        $tipos = User::all();
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
    public function saved_content()
    {
        return $this->hasMany('App\SavedContent');
    }

    public function publications()
    {
        return $this->hasMany('App\Publication');
    }

    //Relación Many to Many con Publication
    public function likes_publications()
    {
        return $this->belongsToMany('App\Publication','mana_user_publication_like')
           ->using('App\UserPublicationLike')
           ->withPivot('datetime');
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
     * Return the profile Picture of the user.
     *
     * @return string HTML
     */
    public function printProfileImage()
    {
        return $this->profile_pic ? '<img width="50" height="50" src="'.$this->profile_pic.'"/>' : '<img src="http://placehold.it/100"/>';
    }

}
