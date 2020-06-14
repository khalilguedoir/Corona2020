<?php

namespace App\Http\Controllers;

use App\publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications=publication::all();
        return view('home',['publications'=>$publications]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id=Auth::user()->profile()->get('user_id');
       /* dd($id);*/
        $id = $id[0]->user_id;

        $this->validate($request, [
            'text' => 'required|max:500',
            'img' => 'image|mimes:jpeg,jpg,gif,png|max:2048'

        ]);
       $img_name =$request->img->getClientOriginalExtension();
        $publication = new publication();
        $publication->profile_id=$id;
        $publication->text = $request['text'];
        $publication->img =$img_name ;
       /* if ($request->user()->publication()->save($publication)) {
            $message = 'Publication successfully created!';
        }*/
       $publication->save();
       $request->img->move(public_path('uplaod'),$img_name);
        return redirect()->route('home')->with(['message' => 'Successfully']);
    }
    public function Delete($pub_id)
    {
        $publication = publication::where('id', $pub_id)->first();
        $publication->delete();
        return redirect()->route('home')->with(['message' => 'Successfully deleted!']);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show(publication $publication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\publication  $publication
     * @return \Illuminate\Http\Response
     */
   /* public function edit(Request $request, publication $publication)
    {
        $validatedData = $request->validate($this->validationRules());

        $publication->edit($validatedData);

        return redirect()->route('show', $publication->id)->with('publication updated successfully');
    }*/
    public function edit(Request $request, publication $publication)
    {
        $publication->update([
            'text'  => $request->text,
            ]);
      return redirect()->route('home');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, publication $publication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\publication  $publication
     * @return \Illuminate\Http\Response
     */

}



