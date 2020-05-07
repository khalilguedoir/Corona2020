<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publication extends Model
{
    //
    public function profile()
    {
        return $this->belongsTo('App\profile'); //Or hasOne maybe idk
    }

    public function commentaire()
    {
        return $this->hasMany('App\commentaire','pub_id');
    }
    public function reactPub()
    {
        return $this->hasMany('App\reactPub');
    }
}
