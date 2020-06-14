<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class friend extends Model
{
    //
    public function profileFrom()
    {
        return $this->belongsTo('App\profile','profile_id_from');
    }

    public function profileTo()
    {
       return  $this->belongsTo('App\profile','profile_id_to');
    }

    //etat = 1 => friends
    public function scopeAreFirends($query)
    {
        return $query->where('etat',1);
    }
    //etat = 2 => non friends
    public function scopeNonFriends($query)
    {
        return $query->where('etat',0);
    }

    
}
