<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
  public function venues(){
    return $this->belongsToMany(Venue::class,'venues_programs','program_id', 'venue_id');
  }
}
