<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    protected $guarded = [];

    protected $table = "sports";

    public  function  inplayes()
    {
        return $this->hasMany('App\Match')->whereStatus(1)->latest()->limit(5);
    }
    public  function  events()
    {
        return $this->hasMany('App\Event');
    }

}
