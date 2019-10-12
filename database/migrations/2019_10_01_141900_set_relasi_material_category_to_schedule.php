<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetRelasiMaterialCategoryToSchedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_category_schedule', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('schedule_id');
            $table->foreign('schedule_id')->references('id')->on('schedules');

            $table->unsignedInteger('material_category_id');
            $table->foreign('material_category_id')->references('id')->on('materialcategories');

            $table->float('sum', 7, 4);

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
        Schema::dropIfExists('material_category_schedule');
    }
}
