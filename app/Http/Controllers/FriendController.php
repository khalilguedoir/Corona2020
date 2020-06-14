<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use DB;
use App\friend;
use App\profile;
use App\publication;
use Illuminate\Http\Request;

class FriendController extends Controller
{


    public function index()
    { 

   //hné ena 5arrajt el id ta3 el profile ta3 el user connecté (btw chikoun houa bidou el id ta3 user but for any case of problem or something)
        $friends = Auth::user()->profile()->get('user_id');
        //el variable $friends bech to5rech sous form collection alors que ena 7achti biha integer so 5arrajtha sou form entier fel star hedha
        $friends = $friends[0]->user_id;
    //Friend request list
        $request = $this->getFriendRequest($friends);                                          
   //list of friend that send you invitation before and you accepted 
          $listInv=$this->getListFriends('profile_id_to','profileFrom',$friends);
    //list of frind that you send them invitaion and they accepted because they're so Kind <3
          $listAccepted = $this->getListFriends('profile_id_from','profileTo',$friends);
    //Test idha kén wa7da menhom vide or not bech na3rfou ncocatiniw les deux résultat ma3 b3adhhom walla lé
     if(($listAccepted->isEmpty()) == ($listInv->isEmpty()))
     {
         if($listAccepted->isEmpty())
            return view('friends', compact('request'))->with('noFriend',0);
        else
        {   //fsa5t el profileTo 5ater relation manest7a9hech w ena ki chenboukli 3ala zouz ma3 b3adhhom matod5ol b3adhha
                    // $listAccepted = $listAccepted->forget('profileTo');
                    // $listInv = $listInv->forget('profileFrom');

                    // $bothList = $listInv->concat($listAccepted);
                    $both = array();
                    foreach ($listInv as $lista)
                    {
                        array_push($both,['idFriendList' => $lista->id,'id'=>$lista->profileFrom->id , 'fname'=>$lista->profileFrom->fname,
                        'lname' =>  $lista->profileFrom->lname, 'img' => $lista->profileFrom->img,
                        'updated_at' => $lista->updated_at]);
                    
                    }
                    foreach($listAccepted as $lista)
                    {
                        array_push($both,['idFriendList' => $lista->id,'id'=>$lista->profileTo->id, 'fname'=>$lista->profileTo->fname,
                        'lname' => $lista->profileTo->lname, 'img' => $lista->profileTo->img,
                        'updated_at' => $lista->profileTo->updated_at]);
                    }
                    return view('friends',compact('request'))->with('both',$both);
            
        }
     }else
     {
       //mazelt el parti hedhi ya ziw
       if($listInv->isEmpty())
       return view('friends')->with('listA',$listAccepted)->with('request',$request);
       if($listAccepted->isEmpty())
       return view('friends',compact('request'))->with('listI',$listInv);

     }
        
       
    
        
    }
    public static function infoPerson($id)
    {
        $person= DB::table('profiles')
        ->select('id','fname','lname','img','bio')
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

    public function Accept($id)
    {
        $friend = friend::find($id);
        $friend->etat = 1;
        $friend->save();

        return redirect()->back()->with('friendAccepted','Friend has been Accepted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\friend  $friend
     * @return \Illuminate\Http\Response
     */
    public function destroy($friend)
    {
        //
        $frienddel = friend::find($friend);
        $frienddel->delete();
       return redirect()->route('friends.index')->with('friendDown', 'Hakka tfassa5 3chir 3omrek ? ');
    }



    public function getListFriends(String $val1,String $val2,int $friends)
    {
        $list = friend::AreFirends()->where($val1,$friends)->with([$val2 => function($query){
            $query->select('fname','id','lname','img');
        }]);
        $hiddenItems= ['etat','created_at','updated_at','profile_id_to','id','profile_id_from'];
        return $list->get()->makeHidden($hiddenItems);
    }

    //fonction t5arrajlek list ta3 el invi sinon idha mab3athlek 7ad invi trajja3lek false
    public function getFriendRequest(int $friends)
    {
        $list = friend::NonFriends()->where('profile_id_to',$friends)->with(['profileFrom' => function($query){
            $query->select('fname','id','lname','img');
        }])->get();
        
        if($list->isEmpty())
            return false;
        
            return $list;
    }
}
