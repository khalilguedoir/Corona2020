<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class friend extends Model
{
    public function profile()
    {
        return $this->belongsTo('App\profile');
    }
}
