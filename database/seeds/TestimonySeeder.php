<?php

use Illuminate\Database\Seeder;

class TestimonySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         App\Testimony::truncate();

         $testimony= new  App\Testimony();
         $testimony->video_1 = "https://www.youtube.com/watch?v=aJOTlE1K90k";
         $testimony->video_2 = "https://www.youtube.com/watch?v=aJOTlE1K90k";
         $testimony->video_3 = "https://www.youtube.com/watch?v=aJOTlE1K90k";

         $testimony->save();
    }
}
