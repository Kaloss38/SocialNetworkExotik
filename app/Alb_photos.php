<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Alb_photos extends Model
{
     protected $table = 'alb_photo';
        const CREATED_AT = NULL;
        const UPDATED_AT = NULL;


  



         public function user_photo()
    {
         return $this->hasOne('App\Parametre','id','user_id');
    }


        public function photo_user()  // relation pour l'inscription avec photos
    {
         return $this->hasOne('App\User', 'photoID', 'id');
    }

  

    // $dates = DateTime::createFromFormat('Y-M-J', 'birth_date');

}
