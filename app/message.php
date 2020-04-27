<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class message extends Model
{
    protected $fillable = [
        'profile_id', 'profile2_id', 'msg', 'created_at', 'read_at'
    ];

    public $timestamps = false;
    protected $dates = ['created_at', 'read_at'];


    public function profile()
    {
        return $this->belongsTo('App\message');
    }
}
