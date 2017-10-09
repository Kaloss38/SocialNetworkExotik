<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipeChat extends Model
{
    protected $table = 'participechats';
  	const CREATED_AT = NULL;
  	const UPDATED_AT = NULL;

  	public function users()
  	{
  		return $this->hasMany('App\User', 'id', 'user_ID');
  	}

  	public function chatrooms()
  	{
  		return $this->hasMany('App\Chatroom', 'id', 'chatRoom_ID');
  	}
}
