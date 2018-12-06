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



         $this->call(CareerSeeder::class);
         $this->call(ProgramSeeder::class);
         $this->call(TestimonySeeder::class);
         $this->call(ContentSeeder::class);
         $this->call(SliderSeeder::class);
         $this->call(VenueSeeder::class);

     


        factory(App\Lead::class)
        ->times(40)
        ->create();


    }
}
