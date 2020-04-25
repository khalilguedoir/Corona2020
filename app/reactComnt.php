<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reactComnt extends Model
{
    //
    public function commentaire()
    {
        return $this->belongsTo('App\commentaire');
    }
}
