<?php

namespace App\Http\Controllers;
use DB;
use App\commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public static  function getCommataire($pub_id)
    {
        $comm_pub= DB::table('commentaires')
        ->select('commentaires.*')
        ->where('pub_id','=',$pub_id)
        ->get();
        return ($comm_pub);

    }
    public function PubComment(Request $request)
    {
        $id= Auth::id();
        var_dump($comnt= $request->message);
        $id_pub= $request->id_comment;
        /*$comnts = DB::table('commentaires')->insert(
            ['pub_id' => $pub_id,'profile_id' => $id,'commentaire' => $comnt ]
        );
      
              return redirect('/accuiel');
    */
    }
   
    public static  function getJaime($pub_id)
    {
        $count = DB::table('react_pubs')
        ->where('pub_id','=',$pub_id)
        ->count('id');
        return ($count);

    }
}