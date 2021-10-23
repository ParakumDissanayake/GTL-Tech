<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmFormLastRunrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbm_form_last_runrs', function (Blueprint $table) {
            $table->id();
            $table->integer('runner_id')->unsigned();
            $table->foreign('runner_id')->references('id')->on('tbm_runners')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbm_form_last_runrs');
    }
}
