<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    //

   public function publication()
   {
       return $this->hasMany('App\publication');
   }

   public function commentaire()
   {
       return $this->hasMany('App\commentaire');
   }
   public function reactPub()
   {
       return $this->hasMany('App\reactPub');
   }
   public function reactComnt()
   {
       return $this->hasMany('App\reactComnt');
   }
   public function friend()
   {
       return $this->hasMany('App\friend');
   }
   public function message()
   {
       return $this->hasMany('App\message');
   }

}
