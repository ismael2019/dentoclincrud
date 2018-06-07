<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attention extends Model
{
  protected $fillable = [
    'tooth','description'
  ];

  public function patient(){
    return $this->belongsTo('App\Patient');
  }
  public function treatment(){
    return $this->belongsTo('App\Treatment');
  }
}
