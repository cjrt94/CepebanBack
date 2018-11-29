<?php

use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         App\Slider::truncate();

         $slider= new  App\Slider();
         $slider->description = "Imagen 1";
         $slider->image = "sliders/octopus_1.png";
         $slider->save();

 		 $slider= new  App\Slider();
         $slider->description = "Imagen 2";
         $slider->image = "sliders/octopus_2.png";
         $slider->save();

    }
}
