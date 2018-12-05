<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
  public function venues(){
    return $this->belongsToMany(Venue::class)->using(ProgramVenue::class);
  }
}
