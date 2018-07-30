<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Consultation;
use App\Patient;
use Session;
use Redirect;
class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultations = Consultation::orderBy('id','DESC')->paginate(5);
        return view ('consultation.index',compact('consultations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients = Patient::all();
        return view('consultation.create',compact('patients'));
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
          'diagnosis'=>'required',
          'start_date'=>'required',
          'end_date'=>'required'
        ]);

        $consultation = new Consultation;
        $consultation->diagnosis = $request->input('diagnosis');
        $consultation->start_date =  $request->input('start_date');
        $consultation->end_date = $request->input('end_date');
        $consultation->patient_id = $request->input('patient_id');
        $consultation->save();
        Session::flash('message', 'La cita fue registrada con Éxito');
        return Redirect::to('/consultation');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Consultation $consultation)
    {
        return view('consultation.show',compact('consultation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultation $consultation)
    {
        $patients = Patient::all();
        return view ('consultation.edit',compact('consultation','patients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultation $consultation, Patient $patients)
    {
      $consultation->fill($request->all());
      $consultation->save();
      Session::flash('edit', 'Se modifico la Cita con Éxito');
      return Redirect::to('/consultation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consultation = Consultation::find($id);
        $consultation->delete();
        Session::flash('del', 'La cita fue Eliminada con Éxito');
        return redirect('consultation');
    }
}
