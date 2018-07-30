<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attention extends Model
{
  protected $fillable = [
    'tooth','description','patient_id','treatment_id'
  ];

  public function patient(){
    return $this->belongsTo('App\Patient');
  }
  public function treatment(){
    return $this->belongsTo('App\Treatment');
  }
}
