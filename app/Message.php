<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
  protected $table = 'messages';
  const CREATED_AT = 'dateTime';
  const UPDATED_AT = NULL;

  public function user()
  	{
  		return $this->hasOne('App\User', 'id', 'user_ID');
  	}

  	public function chatroom()
  	{
  		return $this->hasOne('App\Chatroom', 'id', 'chatroom_ID');
  	}

    public function user1()
    {
      return $this->hasOne('App\Friend', 'id', 'user_id_1');
    }

    public function user2()
    {
      return $this->hasOne('App\Friend', 'id', 'user_id_2');
    }


}