<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
  protected $fillable = [
      'name'
    ];
  public function attentions(){
    return $this->hasMany('App\Attention');
  }
}
