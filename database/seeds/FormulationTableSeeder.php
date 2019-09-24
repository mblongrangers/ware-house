<?php

use Illuminate\Database\Seeder;

use App\Formulation;
use App\MaterialCategory;
use App\Composition;

class FormulationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compositions')->delete();
        DB::table('formulations')->delete();

    	$formulation = Formulation::create([
    		'name' => 'Chocho Chips Pandan'
    	]);

    	$formulation->compositions()->saveMany([
            new Composition([
                'materialcategory_id' => MaterialCategory::find(9)->id,
                'quantity' => 100]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(1)->id,
                'quantity' => 0.12]),
        ]);
    }
}
