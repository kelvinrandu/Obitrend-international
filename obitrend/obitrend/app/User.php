<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens,Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'email',
        'password',
        'gender',
        'first_name',
        'other_names',
        'access_level',
        'my_country',
        'slug',
        'avatar',
        'account_status',
        'phone_number',
        'verifyToken',
        'status',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /* relationships*/

      public function profile()
    {
      return $this->hasOne(Profile::class,'profiles');
    }

      public function announcements()
    {
        return $this->hasMany('App\Announcement');
    }
    public function notification()
  {
      return $this->hasMany('App\Profile');
  }
}
