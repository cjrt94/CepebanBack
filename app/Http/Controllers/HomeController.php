<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\Career;
use App\Content;
use App\Slider;
use App\Testimony;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $programs=  Program::all();
        $careers= Career::all();
        $contents= Content::all();
        $sliders= Slider::all();
        $tetimonies= Testimony::all();


        return view('front.index',[
            'programs' => $programs,
            'careers' => $careers,
            'contents' => $contents,
            'sliders' => $sliders,
            'tetimonies' => $tetimonies


        ]);
    }
}
