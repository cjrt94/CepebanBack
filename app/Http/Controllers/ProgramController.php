<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;

class ProgramController extends Controller
{
    public function index() {
    	$programs= Program::all();
    	return view('programs.app', ['programs' => $programs]);
    }

     public function edit(Program $program){
         
      return view('programs.edit', ['program' => $program]);
   }

    public function update(Program $program,Request $request) {

     

      $program->name = $request->input('name');
      $program->description = $request->input('description');
     
      $program->save();

     
      return redirect('/programas');
        
   }



}
