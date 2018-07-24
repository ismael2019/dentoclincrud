<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;
use Redirect;
use App\Http\Requests;

class UsersController extends Controller
{
  public function __construct()
  {
      $this->middleware('restr');


  }

    public function index(Request $request){
      $users = User::search($request->name)->orderBy('id','DESC')->paginate(5);
      return view('admin.index',compact('users'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, User $user)
    {
        $user->fill($request->all());
        $user->save();
        Session::flash('edit', 'Se modifico la receta médica con Éxito');
        return Redirect::to('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Session::flash('del', 'La receta Médica fue Eliminado con Éxito');
        return redirect('users');
    }

}
