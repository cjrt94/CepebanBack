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
        App\Content::truncate();

        $content= new   App\Content();
        $content->social_fa="https://www.facebook.com/CorporacionCepeban/";
        $content->social_ins="https://www.instagram.com/explore/locations/1014755327/instituto-cepeban/";
       	$content->social_yt = "https://www.youtube.com/channel/UCnpF0SuCATh_nvXnWXUk8OQ";
       	$content->title_page="Cepeban";
       	$content->title_test="TESTIMONIALES";
       	$content->subtitle_test="Nuestros alumnos y egresados comparten con ustedes el orgullo de estudiar con nosotros.";

        $content->save();
    }
}
