<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lead;

class LeadController extends Controller
{
    public function index() {
    	$leads= Lead::orderBy('created_at','desc')->paginate(10);
    	return view('leads.app', ['leads' => $leads]);
    }

    public function create(Request $request){

      Lead::create($request->all());

      return view('front.thanks');

    }
}

 
