<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimony;

class TestimonyController extends Controller
{
     public function edit() {
    	$testimonies= Testimony::all();
    	return view('testimonies.app', ['testimony' => $testimonies[0]]);
    }


    public function update(Testimony $testimony,Request $request) {

     

      $testimony->video_1 = $request->input('video_1');
      $testimony->video_2 = $request->input('video_2');
      $testimony->video_3 = $request->input('video_3');
         
      $testimony->save();

     
      return redirect('/testimonios');
        
   }

}
