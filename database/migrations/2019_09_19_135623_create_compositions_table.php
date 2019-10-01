<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compositions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('materialcategory_id');
            $table->float('quantity', 7, 3);
            $table->foreign('materialcategory_id')->references('id')->on('materialcategories');
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
        Schema::dropIfExists('compositions');
    }
}
