<?php

use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $content= new   App\Content();
        $content->social_fa="https://www.facebook.com/CorporacionCepeban/";
        $content->social_ins="https://instagram.com/institutocepeban?utm_source=ig_profile_share&igshid=1ws43kboh6aq3/";
       	$content->social_yt = "https://twitter.com/ICEPEBAN/";
       	$content->title_page="Cepeban";
       	$content->title_test="TESTIMONIALES";
       	$content->subtitle_test="Nuestros alumnos y egresados comparten con ustedes el orgullo de estudiar con nosotros.";

        $content->save();
    }
}
