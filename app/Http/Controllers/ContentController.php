<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class ContentController extends Controller
{
   public function index() {
    	$contents= Content::all();
    	return view('contents.app', ['content' => $contents[0]]);
    }


     public function update(Content $content,Request $request) {

     
      $content->social_fa = $request->input('social_fa');
      $content->social_ins = $request->input('social_ins');
      $content->social_yt = $request->input('social_yt');

      $content->title_page = $request->input('title_page');
 	    $content->title_test = $request->input('title_test');
  	  $content->subtitle_test = $request->input('subtitle_test');

     
      $content->save();

     
      return redirect('/contenidos');
        
   }
}
