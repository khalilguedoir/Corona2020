<?php

namespace App\Http\Controllers;

use App\User;
use App\message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\profile;
use Carbon\Carbon;


class conversation extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::select('id','name')->where('id', '!=', Auth::user()->id)->get();
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
        $msg->profile1_id =  Auth::id();
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

        $users = User::select('id','name')->where('id', '!=', Auth::user()->id)->get();
        $user_one = User::find($id);
        return view('conversation.show', compact('user_one', 'users'));
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
}
