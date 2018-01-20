<?php

namespace App;

use Bkwld\Decoy\Models\Base;

class SavedContent extends Base
{
    public $table = "mana_saved_content";
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'ingredient_entry_id' => 'required',
    ];

    /**
     * List of all relationships
     *
     * @return Illuminate\Database\Eloquent\Relations\Relation
     */
    public function items()
    {
        return $this->hasMany('App\SavedContentItem');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function ingredientEntry()
    {
        return $this->belongsTo('App\IngredientEntry');
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

    public function ingredient()
    {
        $this->ingredientEntry->ingredient->name;
    }

    public function getAuthor()
    {
        return $this->user->name;
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
