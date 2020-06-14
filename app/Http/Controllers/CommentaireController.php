<?php

namespace App\Http\Controllers;

use App\commentaire;
use App\publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
$this->middleware('auth');
    }

    public function index()
    {
        $commentaire=commentaire::all();
        return view('home',['commentaire'=>$commentaire]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(publication $publication)
    {
request()->validate([
'commentaire'=>'required|min:5'

]);
$commentaire=new commentaire();
$commentaire->commentaire=request('commentaire');
$commentaire->user_id=auth()->user()->id;
$publication->commentaire()->save($commentaire);
return redirect()->route('home');
    }
    public function Delete($com_id)
    {
        $commentaire = commentaire::where('id', $com_id)->first();
        $commentaire->delete();
        return redirect()->route('home');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function show(commentaire $commentaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function edit(commentaire $commentaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, commentaire $commentaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(commentaire $commentaire)
    {
        //
    }
}
