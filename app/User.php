<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    const UPDATED_AT = NULL;
    const CREATED_AT = NULL;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



        public function getPhotoIDAttribute($value)
    {
        if ($value) {
            return $value;
        }
        else {
            return '/images/psyduck.png';
        }
    }


    /** 
    *Relationships user/groups
    *
    */    
    public function groups()
    {
        return $this->hasMany('App\Groupe');
    }


//------------------------------------
    //relation entre Parametre et Alb_photo
    public function photos(){

        return $this->hasMany('App\Alb_photos');

    }


  public function photo_profil(){

        return $this->hasOne('App\Alb_photos','user_id','id');

    }




    //****************************************************************
    /** 
    *Relationships user/messages
    *
    */ 
    public function messages()
    {
        return $this->hasMany('App\Message', 'user_ID', 'id');
    }
    //****************************************************************
    /** 
    *Relationships user/participeChat
    *
    */ 
    public function participeChats()
    {
        return $this->hasMany('App\ParticipeChat', 'user_ID', 'id');
    }
    //****************************************************************
    /** 
    *Relationships user/comments
    *
    */ 
    public function comments()
    {
        return $this->hasMany('App\CommentModel');
    }


    //****************************************************************
    /** 
    *Relationships user/friends
    *
    */ 
    public function friends1()
    {
        return $this->hasMany('App\Friend', 'user_id_1', 'id');
    }


    public function friends2()
    {
        return $this->hasMany('App\Friend', 'user_id_2', 'id');
    }

    public function chatrooms()
    {
        return $this->hasMany('App\Chatroom', 'user_id', 'id');
    }

    public function chatroom()
    {
        return $this->hasOne('App\Chatroom', 'user_id', 'id');
    }


}



