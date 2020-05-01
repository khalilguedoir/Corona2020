<?php

namespace App\Http\Controllers;
use DB;
use App\friend;
use Illuminate\Http\Request;

class FriendController extends Controller
{


    public function index()
    {
        
    }
    public static function infoPerson($id)
    {
        $person= DB::table('profiles')
        ->select('fname','lname','img','bio')
        ->where('id','=',$id)
        ->get();
        return ($person);

    }
    public static function GetFriends($id )
    {
        $friends= DB::table('friends')
        ->select('profile_id_to','profile_id_from')
        ->where('profile_id_from','=',$id,' OR ','profile_id_to','=',$id)
        ->get();
        return ($friends);
    }

}
