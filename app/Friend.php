<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $table = 'be_friend_with';
  	const CREATED_AT = NULL;
  	const UPDATED_AT = NULL;


  	public function user1()
  	{
  		return $this->hasOne('App\User', 'id', 'user_id_1');
  	}

  	public function user2()
  	{
  		return $this->hasOne('App\User', 'id', 'user_id_2');
  	}
}
