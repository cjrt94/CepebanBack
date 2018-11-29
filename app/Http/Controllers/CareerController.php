<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Career;

class CareerController extends Controller
{
    
    public function index() {
    	$careers= Career::all();
    	return view('careers.app', ['careers' => $careers]);
    }

    public function edit(Career $career){
         
      return view('careers.edit', ['career' => $career]);
   }

   public function update(Career $career,Request $request) {

     

      $career->name = $request->input('name');
      $career->description = $request->input('description');
     
      $career->save();

     
      return redirect('/carreras');
        
   }


}
