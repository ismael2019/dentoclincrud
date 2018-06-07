<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
  protected $fillable = [
    'tittle','detail'
  ];

  public function patient(){
    return $this->belongsTo('App\Patient');
  }
}
