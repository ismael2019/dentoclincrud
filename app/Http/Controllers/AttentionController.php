<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attention;
use App\Patient;
use App\Treatment;
use Session;
use Redirect;

class AttentionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attentions = Attention::orderBy('id','DESC')->paginate(5);

        return view ('attention.index',compact('attentions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients = Patient::all();
        $treatments = Treatment::all();
        return view('attention.create',compact('patients','treatments'));
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
          'tooth'=>'required',
          'description'=>'required'
        ]);
        $attention = new Attention;
        $attention->tooth = $request->input('tooth');
        $attention->description = $request->input('description');
        $attention->patient_id = $request->input('patient_id');
        $attention->treatment_id = $request->input('treatment_id');
        $attention->save();
        Session::flash('message', 'Se regristró el Historial Médico con exito');
        //return Redirect::to('/attention');
        return back()->with('success', 'comentario enviado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Attention $attention)
    {
        return view ('attention.show',compact('attention'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Attention $attention)
    {
        $patients = Patient::all();
        $treatments = Treatment::all();
        return view ('attention.edit',compact('attention','patients','treatments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attention $attention)
    {
        $attention->fill($request->all());
        $attention->save();
        Session::flash('edit', 'Se modificó el Historial Médico con Éxito');
        return Redirect::to('/attention');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $attention = Attention::find($id);
       $attention->delete();
       Session::flash('del', 'El Historial Médico fue Eliminado con Éxito');
       return redirect('attention');
   }
}
