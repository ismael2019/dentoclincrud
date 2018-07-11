<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Patient;
use Session;
use Redirect;
class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $patients = Patient::all();
        return view ('patient.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //Validando datos que recibe el $request
        $this->validate($request,[
          'c_i'=>'required',
          'name'=>'required',
          'last_name'=>'required',
          'age'=>'required',
          'gender'=>'required',
          'email'=>'required',
          'phone'=>'required',
          'city'=>'required'
        ]);

//Guardando los datos
          $patient = new Patient;
          $patient->c_i = $request->input('c_i');
          $patient->name = $request->input('name');
          $patient->last_name = $request->input('last_name');
          $patient->age = $request->input('age');
          $patient->gender = $request->input('gender');
          $patient->email = $request->input('email');
          $patient->phone = $request->input('phone');
          $patient->city = $request->input('city');
          $patient->save();
          Session::flash('message', 'El Paciente fue registrado con Éxito');
          return Redirect::to('/patient');

}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        $consultas = DB::table('attentions')
        ->join('treatments','treatments.id','=','treatment_id')
        ->select('attentions.*','treatments.name')
        ->where('attentions.patient_id', '=', $patient->id)->get();
        $recetas = DB::table('prescriptions')->where('prescriptions.patient_id', '=', $patient->id)->get();
       //dd($recetas);
       //dd($consultas);
      return view('patient.show', ['patient' => $patient, 'consultas' => $consultas,'recetas'=>$recetas]);
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //$patients = Patient::find($id);
        return view('patient.edit',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
      $patient->fill($request->all());
      $patient->save();
      Session::flash('edit', 'Se modifico al Paciente con Éxito');
      return Redirect::to('/patient');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $patient = Patient::find($id);
      $patient->delete();
      Session::flash('del', 'El Paciente fue Eliminado con Éxito');
      return redirect('patient');
    }
}
