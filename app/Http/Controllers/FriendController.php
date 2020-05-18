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
        ->limit(4)
        ->get();
        return ($friends);
    }
    public function FriendCommentGet ($id){
        $pub= DB::table('publications')
        ->select('publications.*')
        ->where('profile_id','=',$id)
        ->get();
        return ($pub);

    }

    public function getProfile($id)
    {
       $info= DB::table('profiles')
        ->select('profiles.*')
        ->where('id','=',$id)
        ->get();
        if(!empty($info[0])){
        $fid = $info[0]->id;
        $publication = $this->FriendCommentGet($fid);
        return view('Profile',['myinfo'=>$info,'publications'=>$publication]);
        }
        else{
            echo "<body style='margin:0' oncontextmenu='return false;'><img src='https://www.mediego.com/wp-content/uploads/2017/08/illustration-page-erreur-404.jpg' style='width:100%;hegith:100%;padding:0;margin:0' /></body>";
        }
    }

}
