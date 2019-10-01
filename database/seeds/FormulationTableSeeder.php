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

    	$formulations = Formulation::create([
    		'name' => 'Chocho Chips Pandan'
    	]);

    	$formulations->compositions()->saveMany([
            new Composition([
                'materialcategory_id' => MaterialCategory::find(24)->id,
                'quantity' => 100]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(8)->id,
                'quantity' => 8]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(9)->id,
                'quantity' => 30]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(21)->id,
                'quantity' => 6]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(20)->id,
                'quantity' => 0.6]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(1)->id,
                'quantity' => 1.2]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(22)->id,
                'quantity' => 1.2]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(7)->id,
                'quantity' => 0.2]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(10)->id,
                'quantity' => 0.6]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(11)->id,
                'quantity' => 2]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(26)->id,
                'quantity' => 10]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(5)->id,
                'quantity' => 30]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(12)->id,
                'quantity' => 1.5]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(13)->id,
                'quantity' => 1]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(14)->id,
                'quantity' => 0.016]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(15)->id,
                'quantity' => 0.2]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(16)->id,
                'quantity' => 0.08]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(17)->id,
                'quantity' => 0.4]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(18)->id,
                'quantity' => 20]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(19)->id,
                'quantity' => 0.3]),
        ]);
    }
}
