<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('batch')->unsigned();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('formulation_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('formulation_id')->references('id')->on('formulations');
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
        Schema::dropIfExists('schedules');
    }
}
