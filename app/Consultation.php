<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
  protected $fillable = [
    'diagnosis','start_date','end_date','patient_id'
  ];
  public function patient(){
    return $this->belongsTo('App\Patient');
  }
}
