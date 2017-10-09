<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaqAnswer extends Model
{
    protected $table = 'answers';
    const CREATED_AT = null;
    const UPDATED_AT = null;

    // public function faq()
    // {

    // 	return $this->hasOne('App\Faq', 'id' , 'faq_id');

    // }

// pas obligatoire car la relation n'est que das un sens

}
