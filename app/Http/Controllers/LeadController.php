<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lead;

class LeadController extends Controller
{
    public function index() {
    	$leads= Lead::orderBy('created_at','desc')->get();
    	return view('leads.app', ['leads' => $leads]);
    }

    public function create(Request $request){

      Lead::create($request->all());

      return redirect('/gracias');

    }

    public function thanks(){
        return view('front.thanks');
    }
}

 
