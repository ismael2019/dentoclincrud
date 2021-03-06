<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'admin'], function () {
  Route::resource('patient','PatientController');
  Route::resource('consultation','ConsultationController');
  Route::resource('treatment','TreatmentController');
  Route::resource('prescription','PrescriptionController');
  Route::resource('attention','AttentionController');
  Route::resource('users','UsersController');


});
  Route::resource('suggestion','SuggestionController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
