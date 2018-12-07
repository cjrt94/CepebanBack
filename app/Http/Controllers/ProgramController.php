<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\Venue;

class ProgramController extends Controller
{
    public function index() {
    	$programs= Program::all();
    	return view('programs.app', ['programs' => $programs]);
    }

     public function edit(Program $program){

      $venues= Venue::all();
      $venues_programs=   $program->venues()->get();

      return view('programs.edit', [
        'program' => $program ,
        'venues' => $venues ,
        'venues_programs' => $venues_programs
      ]);
   }

    public function update(Program $program,Request $request) {



      $program->name = $request->input('name');
      $program->description = $request->input('description');
      $program->venues()->detach();
      $program->venues()->attach($request->get('programs'));

      $program->save();


      return redirect('admin/programas');

   }



}
