<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
  public function careers(){
    return $this->belongsToMany(Career::class)->using(CareerVenue::class);
  }

  public function programs(){
    return $this->belongsToMany(Program::class)->using(ProgramVenue::class);
  }


}
