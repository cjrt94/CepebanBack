<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuesCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_venue', function (Blueprint $table) {
            $table->integer('career_id')->unsigned();
            $table->integer('venue_id')->unsigned();

            $table->primary(['career_id' ,'venue_id']);
            $table->foreign('career_id')->references('id')->on('careers')->onDelete('cascade');;
            $table->foreign('venue_id')->references('id')->on('venues')->onDelete('cascade');;

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('career_venue');
    }
}
