<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venue;

class VenueController extends Controller
{
    public function getCp($id){

          $venue= Venue::find($id);

          return [
          'careers' => $venue->careers()->get(),
          'programs' => $venue->programs()->get()
          ];

    }
}
