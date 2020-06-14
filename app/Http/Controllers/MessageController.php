<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use DB;
use App\message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public static function getFirsts_Msg()
    {
        $id= Auth::id();
        $msgs= DB::table('messages')
        ->select('messages.*')
        ->where('profile1_id','=',$id,' OR ','profile2_id','=',$id)
        ->limit(3)
        ->get();

    return ($msgs);
    }


}
