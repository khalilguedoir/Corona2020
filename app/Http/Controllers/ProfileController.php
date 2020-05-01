<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\profile;
class ProfileController extends Controller
{

    public function index()
    {
      
    } 
    public function commentGet ($id){
        $pub= DB::table('publications')
        ->select('publications.*')
        ->where('profile_id','=',$id)
        ->get();
        return ($pub);

    }
    public function infoGet()
    {
        $id= Auth::id();
        $info= DB::table('profiles')
        ->select('profiles.*')
        ->where('id','=',$id)
        ->get();

        $publication = $this->commentGet($id);
        return view('Profile',['myinfo'=>$info,'publications'=>$publication]);

    }

    public function ChangePhotoProfile(Request $request)
    {
        $path = $request->img->store('image_profie');
        echo $path;
        $id= Auth::id();
        // Update  Profile
       /* $profile_Up = DB::table('profiles')
              ->where('id', $id)
              ->update(['img' =>  '127.0.0.1:8000/storage'.'/'.$path]); */
        // Insert Media
         DB::table('media')->insert(
            
            ['profile_id' => $id, 'source' => '/storage'.'/'.$path  ]
        );
        return redirect('/profile');

    }
    public function ChangePhotoCouverture(Request $request)
    {
        $path = $request->img->store('image_couverture');
        echo $path;
        $id= Auth::id();
        // Update  Profile
        /*$profile_Up = DB::table('profiles')
              ->where('id', $id)
              ->update(['img_cov' =>  '127.0.0.1:8000/storage'.'/'.$path]);*/
        // Insert Media
         DB::table('media')->insert(
            
            ['profile_id' => $id, 'source' => '/storage'.'/'.$path  ]
        );
        return redirect('/profile');
    }

}
