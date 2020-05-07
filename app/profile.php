<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $guarded = [];
    protected $dates = [
        'birth',
    ];
    
    //relation with publication
    public function publication()
    {
        return $this->hasMany('App\publication');
    }
    //relation with commentaire
    public function commentaire()
    {
        return $this->hasMany('App\commentaire');
    }
    //relation with reactPub
    public function reactPub()
    {
        return $this->hasMany('App\reactPub');
    }
    //relation with reactComnt
    public function reactComnt()
    {
        return $this->hasMany('App\reactComnt');
    }
    //relation with Friends
    public function friend()
    {
        return $this->hasMany('App\friend');
    }
    //relation with message
    public function message()
    {
        return $this->hasMany('App\message');
    }
    //realtion with users
    public function User()
    {
        return $this->belongsTo('App\User');
    }

    //relation with media
    public function media()
    {
        return $this->hasMany('App\media');
    }

    //relation multiple avec friend(many to two)
    public function friendFrom()
    {
        return $this->hasMany('App\friend','profile_id_from');
    }

    public function friendTo()
    {
       return  $this->hasMany('App\friend','profile_id_to');
    }


    //relation de Message (same like friends)
    public function message1()
    {
        return $this->hasMany('App\message','profile1_id');
    }

    public function message2()
    {
        return $this->hasMany('App\message','profile2_id');
    }
}
