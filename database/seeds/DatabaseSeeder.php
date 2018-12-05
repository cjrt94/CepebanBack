<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      DB::statement('SET FOREIGN_KEY_CHECKS=0;');

         $this->call(CareerSeeder::class);
         $this->call(ProgramSeeder::class);
         $this->call(TestimonySeeder::class);
         $this->call(ContentSeeder::class);
         $this->call(SliderSeeder::class);
         $this->call(VenueSeeder::class);

      DB::statement('SET FOREIGN_KEY_CHECKS=1;');          


        factory(App\Lead::class)
        ->times(40)
        ->create();


    }
}
