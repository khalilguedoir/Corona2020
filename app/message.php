<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    //

    public function profile1()
    {
        return $this->belongsTo('App\profile','profile1_id');
    }

    public function profile2()
    {
        return $this->belongsTo('App\profile','profile2_id');
    }
}
