<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
  protected $fillable = [
    'diagnosis','start_date','end_date'
  ];
  public function patient(){
    return $this->belongsTo('App\Patient');
  }
}
