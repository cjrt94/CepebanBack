<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{
    public function index() {
    	$sliders= Slider::all();
    	return view('sliders.app', ['sliders' => $sliders]);
    }

     public function update(Request $request) {

     	$ids = $request->get('id');

     	foreach($ids as $id){
     		$slider= Slider::find($id);
     		$image= $request->file('image'.$id);
     		if(isset($image) ) {
	     		$slider->image= $image->store('sliders','public');
	     		$slider->save();
     		}
     		
     	}

        
         return redirect('/sliders');
   }
}
