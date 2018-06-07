<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
  protected $fillable = [
    'c_i','name','last_name','age','gender','email','phone','city'
];
public function attentions(){
  return $this->hasMany('App\Attention');
}
public function prescriptions(){
  return $this->hasMany('App\Prescription');
}
public function consultations(){
  return $this->hasMany('App\Consultation');
}
}
