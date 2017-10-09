<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = 'faq';
    const CREATED_AT = null;
    const UPDATED_AT = null;


      public function answer()
    {

    	return $this->hasOne('App\FaqAnswer','faq_id','id');

    }

    // public function userFaq()
    // {
    // 	return $this->hasMany('App\User', '', '')

    // }

}


