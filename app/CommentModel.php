<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    protected $table = "comment";
    const CREATED_AT = "date";
    const UPDATED_AT = NULL;


    public function post()
    {
        return $this->hasOne('App\postModel', 'id', 'postID');
    } 
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'userID');
    } 

}


