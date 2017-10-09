<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\PostScope;

class postModel extends Model
{
    protected $table = "post";
    const CREATED_AT ="date";
    const UPDATED_AT = NULL;

    public function comments()
    {
        return $this->hasMany('App\CommentModel','postID', 'id');
    }

    // Scopes post**************************************************************************************************

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new PostScope);
    } 
}
