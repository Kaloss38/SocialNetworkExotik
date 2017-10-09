<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

// use Illuminate\Database\Eloquent\SoftDeletes;
class Parametre extends Model
{
    protected $table = 'users';
    // protected $table = 'alb_photo';

     const CREATED_AT = NULL;
     //const UPDATED_AT = NULL;




     
    
    //protected $date = ['$date'];


      /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
                            'password'
                        ];


           public function profil_photo()
    {
        return $this->hasOne('App\Alb_photos' ,'id','photoID');
    }







   

}
