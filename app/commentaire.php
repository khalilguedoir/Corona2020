<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commentaire extends Model
{
    //
    public function publication()
    {
        return $this->belongsTo('App\publication'); //hasOne maybe hasOne()
    }

    public function reactComnt()
    {
        return $this->hasMany('App\reactComnt');
    }

}
