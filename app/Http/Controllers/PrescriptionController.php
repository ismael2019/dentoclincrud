<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Prescription;
use App\Patient;
use Session;
use Redirect;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $prescriptions = Prescription::all();
      return view ('prescription.index',compact('prescriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $patients = Patient::all();
      return view('prescription.create',compact('patients'));
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
        'tittle'=>'required',
        'detail'=>'required'
      ]);
      $prescription = new Prescription;
      $prescription->tittle = $request->input('tittle');
      $prescription->detail = $request->input('detail');
      $prescription->patient_id = $request->input('patient_id');
      $prescription->save();
      Session::flash('message', 'La Receta Médica fue registrada con Éxito');
      //return Redirect::to('/prescription');
      return back()->with('success', 'comentario enviado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Prescription $prescription)
    {
        return view ('prescription.show',compact('prescription'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Prescription $prescription)
    {
        return view ('prescription.edit',compact('prescription'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prescription $prescription)
    {
        $prescription->fill($request->all());
        $prescription->save();
        Session::flash('edit', 'Se modifico la receta médica con Éxito');
        return Redirect::to('/prescription');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prescription = Prescription::find($id);
        $prescription->delete();
        Session::flash('del', 'La receta Médica fue Eliminado con Éxito');
        return redirect('prescription');
    }
}
