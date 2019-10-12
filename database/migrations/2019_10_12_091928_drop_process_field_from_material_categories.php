<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropProcessFieldFromMaterialCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('materialcategories', function (Blueprint $table) {
            $table->dropColumn('process');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('materialcategories', function (Blueprint $table) {
            $table->boolean('process')->default(0);
        });
    }
}
