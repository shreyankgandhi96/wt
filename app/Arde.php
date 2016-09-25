<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arde extends Model
{
    //
        protected $table = 'artistdetails';
         protected $fillable = [
        'user_id', 'about', 'type','area'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
