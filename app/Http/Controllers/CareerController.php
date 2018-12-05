<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Career;
use App\Venue;

class CareerController extends Controller
{

    public function index() {
    	$careers= Career::all();
    	return view('careers.app', ['careers' => $careers]);
    }

    public function edit(Career $career){

      $venues= Venue::all();
      $venues_careers=   $career->venues()->get();

      return view('careers.edit', [
        'career' => $career ,
        'venues' => $venues ,
        'venues_careers' => $venues_careers
      ]);
   }

   public function update(Career $career,Request $request) {


      $career->name = $request->input('name');
      $career->description = $request->input('description');
      $career->venues()->detach();
      $career->venues()->attach($request->get('venues'));

      $career->save();

      return redirect('admin/carreras');

   }


}
