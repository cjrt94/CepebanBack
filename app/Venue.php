<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
  public function careers(){
    return $this->belongsToMany(Venue::class,'venues_careers','venue_id', 'career_id');
  }

  public function programs(){
    return $this->belongsToMany(Venue::class,'venues_programs','venue_id', 'program_id');
  }


}
