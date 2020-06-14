<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reactPub extends Model
{
    //
    public function publication()
    {
        return $this->belongsTo('App\publication');  //Or hasOne maybe idk
    }
    

}
