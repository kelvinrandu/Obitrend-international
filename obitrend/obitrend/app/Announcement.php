<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Announcement extends Model
{

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    protected $fillable = [

        'user_id',
        'type_of_announcement',
        'image_thumb',
        'image_path',
        'description',
        'location',
        'file_path',
        'payment',
        'status',
        'days',
        'country',
        'is_featured',
        'title'
        ];


    public function tribute()
    {
        return $this->hasMany(Tribute::class,'tributes');
    }
    public function comment()
    {
        return $this->hasMany(Comment::class,'tributes');
    }


}
