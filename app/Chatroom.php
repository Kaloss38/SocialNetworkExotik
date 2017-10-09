<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chatroom extends Model
{
	protected $table = 'chatrooms';
  	const CREATED_AT = 'dateTime';
  	const UPDATED_AT = NULL;



    public function messages()
    {
        return $this->hasMany('App\Message');
    }

    public function participeChats()
    {
        return $this->hasMany('App\ParticipeChat', 'chatRoom_ID', 'id');
    }
}
