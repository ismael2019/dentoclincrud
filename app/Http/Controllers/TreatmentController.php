<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Treatment;
use Session;
use Redirect;
class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treatments = Treatment::all();
        return view ('treatment.index',compact('treatments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('treatment.create');
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
          'name'=>'required'
        ]);

        $treatment = new Treatment;
        $treatment->name = $request->input('name');
        $treatment->save();
        Session::flash('message', 'El tratamiento fue registrado con Éxito');
        return Redirect::to('/treatment');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Treatment $treatment)
    {
        return view('treatment.show',compact('treatment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Treatment $treatment)
    {
        return view ('treatment.edit',compact('treatment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Treatment $treatment)
    {
      $treatment->fill($request->all());
      $treatment->save();
      Session::flash('edit', 'Se modifico el Tratamiento con Éxito');
      return Redirect::to('/treatment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $treatment = Treatment::find($id);
      $treatment->delete();
      return redirect('treatment')->with('success','Information has been  deleted');
  }
}
