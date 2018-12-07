<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\Career;
use App\Content;
use App\Slider;
use App\Testimony;
use App\Venue;


class HomeController extends Controller{


  public function __construct()
  {
      $this->middleware('auth');
  }


  public function index(){

        $programs=  Program::all();
        $careers= Career::all();
        $contents= Content::all();
        $sliders= Slider::all();
        $tetimonies= Testimony::all();
        $venues=  Venue::all();


        return view('front.index',[
            'programs' => $programs,
            'careers' => $careers,
            'contents' => $contents,
            'sliders' => $sliders,
            'tetimonies' => $tetimonies,
            'venues' => $venues,

        ]);
    }


}
