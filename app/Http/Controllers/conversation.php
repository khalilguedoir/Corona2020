<?php

namespace App\Http\Controllers;

use App\User;
use App\message;
use App\friend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\profile;
use Carbon\Carbon;
use PhpParser\Node\Expr\FuncCall;
use PHPUnit\Framework\Constraint\Count;

class conversation extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = $this->getconversations() ;
        return view('conversation.index', compact('users'));
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
    public function store(Request $request)
    {

        $msg = new message;
        $msg->profile_id =  Auth::user()->profile->id;
        $msg->profile2_id = $request->to;
        $msg->msg = $request->content;
        $msg->created_at = Carbon::now();
        $msg->save();
        return redirect()->route('conversation.show', $request->to)->with('sent', 'message sent');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $users = $this->getconversations() ;
        $user_one = User::find($id);
        $messages = $this->getmessages($id);
        return view('conversation.show', compact('user_one', 'users', 'messages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function getconversations()
    {
        $conto = friend::select('profile_id_to')->where('profile_id_from', Auth::user()->id)
                    ->where('etat', 1)
                    ->pluck('profile_id_to');
        $confrom = friend::select('profile_id_from')
                    ->Where('profile_id_to', Auth::user()->id)
                    ->where('etat', 1)
                    ->pluck('profile_id_from');


        $merged = $conto->merge($confrom);
        $us = User::all();
        $convs = $us->whereIn('id', $merged);

        $unread = $this->unread(Auth::user()->id);
        foreach ($convs as $conv)
        {
            if (isset($unread[$conv->id]))
            {
                $conv->unread = $unread[$conv->id];
            }else
            {
                $conv->unread = 0;
            }
        }
        return $convs;
    }
    public function getmessages($id)
    {
        return $m = message::where('profile_id', Auth::user()->profile->id)
                    ->where('profile2_id', $id)
                    ->orWhere('profile_id', $id)
                    ->where('profile2_id', Auth::user()->profile->id)
                    ->orderBy('created_at', 'asc')
                    ->paginate(4);
    }
    public function unread(int $userid)
    {
        return $a = message::where('profile2_id',$userid)
                      ->groupBy('profile_id')
                      ->selectRaw('profile_id,COUNT(id) as count')
                      ->whereRaw('read_at is NULL')
                      ->get()
                      ->pluck('count', 'profile_id');
    }
}
