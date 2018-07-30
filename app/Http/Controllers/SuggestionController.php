<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Suggestion;
use Session;
use Redirect;

class SuggestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('admin')->except('create','store');

     }
  public function index()
    {
      $suggestions = Suggestion::orderBy('id','DESC')->paginate(5);
      return view ('suggestion.index',compact('suggestions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suggestion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
        'full_name'=>'required',
        'cel'=>'required',
        'email'=>'required',
        'description'=>'required',
      ]);

      $suggestion = new Suggestion;
      $suggestion->full_name = $request->input('full_name');
      $suggestion->cel = $request->input('cel');
      $suggestion->email = $request->input('email');
      $suggestion->description = $request->input('description');
      $suggestion->save();
      Session::flash('sugerencia', 'La Sugerencia fue registrado con Éxito');
      return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Suggestion $suggestion)
    {
        return view('suggestion.show',compact('suggestion'));
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
    public function update(Request $request, Suggestion $suggestion)
    {
      $suggestion->fill($request->all());
      $suggestion->save();
      return Redirect::to('/suggestion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $suggestion = Suggestion::find($id);
      $suggestion->delete();
      Session::flash('eliminarSuge', 'Se elimino la sugerencia con Éxito');
      return redirect('suggestion');
    }
}
