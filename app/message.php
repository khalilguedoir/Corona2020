<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    protected $fillable = [
        'profile1_id', 'profile2_id', 'msg', 'created_at', 'updated_at'
    ];

    public $timestamp = false;
    protected $dates = ['created_at', 'read_at'];
}
