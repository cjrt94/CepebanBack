<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Venue extends Model
{

    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

  public function careers(){
    return $this->belongsToMany(Career::class)->using(CareerVenue::class);
  }

  public function programs(){
    return $this->belongsToMany(Program::class)->using(ProgramVenue::class);
  }


}
