<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserPublicationLike extends Pivot
{
    protected $table = 'mana_user_publication_like';
}
