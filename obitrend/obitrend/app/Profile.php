<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $with = ['user','tribute'];
    protected $fillable = [
        'user_id',
        'city',
        'town',
        'estate',
        'biography',
        'facebook_username',
        
        ];

     public function user()
    {
      return $this->belongsTo('App/User');
    }


}
