<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $guarded= [];

    public function venues(){
      return $this->belongsToMany(Venue::class)->using(CareerVenue::class)->withPivot('venue_id');
    }
}
