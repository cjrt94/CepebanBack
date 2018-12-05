<?php

use Illuminate\Database\Seeder;

class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          App\Venue::truncate();

          $venue= new   App\Venue();
          $venue->name="Lince";
          $venue->save();

          $venue= new   App\Venue();
          $venue->name="Carabayllo";
          $venue->save();

          $venue= new   App\Venue();
          $venue->name="Los Olivos";
          $venue->save();

          $venue= new   App\Venue();
          $venue->name="SJM";
          $venue->save();

          $venue= new   App\Venue();
          $venue->name="Huaral";
          $venue->save();

          $venue= new   App\Venue();
          $venue->name="Huancayo";
          $venue->save();

          $venue= new   App\Venue();
          $venue->name="Huánuco";
          $venue->save();

          $venue= new   App\Venue();
          $venue->name="Pucallpa";
          $venue->save();

          $venue= new   App\Venue();
          $venue->name="Tarapoto";
          $venue->save();

          $venue= new   App\Venue();
          $venue->name="Iquitos";
          $venue->save();


    }
}
