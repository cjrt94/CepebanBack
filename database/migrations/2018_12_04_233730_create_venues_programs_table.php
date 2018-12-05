<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuesProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues_programs', function (Blueprint $table) {
            $table->integer('program_id')->unsigned();
            $table->integer('venue_id')->unsigned();

            $table->primary(['program_id' ,'venue_id']);
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');;
            $table->foreign('venue_id')->references('id')->on('venues')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venues_programs');
    }
}
