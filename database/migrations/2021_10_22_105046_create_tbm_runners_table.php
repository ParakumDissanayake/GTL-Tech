<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmRunnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbm_runners', function (Blueprint $table) {
            $table->id();
            $table->string('external_id');
            $table->string('name');
            $table->integer('race_id')->unsigned();
            $table->foreign('race_id')->references('id')->on('tbm_races')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbm_runners');
    }
}
