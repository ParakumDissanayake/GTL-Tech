<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbm_races', function (Blueprint $table) {
            $table->id();
            $table->string('external_id');
            $table->string('name');
            $table->integer('meeting_id')->unsigned();
            $table->foreign('meeting_id')->references('id')->on('tbm_meetings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbm_races');
    }
}
