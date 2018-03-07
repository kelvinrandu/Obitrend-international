<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Notification extends Model
{
      //public $with = ['user','tribute',];
    protected $fillable = [
        'type',
        'notifiable_id',
        'notifiable_type',
        'data'
        ];




}
