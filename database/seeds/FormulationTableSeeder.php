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

    	$choco = Formulation::create([
    		'name' => 'Chocho Bitz'
    	]);

    	$choco->compositions()->saveMany([
            new Composition([
                'materialcategory_id' => MaterialCategory::find(1)->id,
                'quantity' => 25]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(2)->id,
                'quantity' => 12]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(3)->id,
                'quantity' => 12.5]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(4)->id,
                'quantity' => 12.5]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(5)->id,
                'quantity' => 3.5]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(6)->id,
                'quantity' => 2]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(7)->id,
                'quantity' => 0.27]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(8)->id,
                'quantity' => 0.35]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(9)->id,
                'quantity' => 0.35]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(10)->id,
                'quantity' => 0.225]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(11)->id,
                'quantity' => 0.33]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(12)->id,
                'quantity' => 0.0145]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(13)->id,
                'quantity' => 0.1585]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(14)->id,
                'quantity' => 0.7]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(15)->id,
                'quantity' => 0.05]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(16)->id,
                'quantity' => 0.25]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(17)->id,
                'quantity' => 0.21]),
        ]);

        $lezzo = Formulation::create([
            'name' => 'Lezzo Chocolate Renceng'
        ]);

        $lezzo->compositions()->saveMany([
            new Composition([
                'materialcategory_id' => MaterialCategory::find(1)->id,
                'quantity' => 75]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(4)->id,
                'quantity' => 33]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(2)->id,
                'quantity' => 15]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(5)->id,
                'quantity' => 9]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(6)->id,
                'quantity' => 3]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(8)->id,
                'quantity' => 0.3]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(10)->id,
                'quantity' => 0.205]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(9)->id,
                'quantity' => 0.2]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(22)->id,
                'quantity' => 0.1]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(18)->id,
                'quantity' => 0.3]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(12)->id,
                'quantity' => 0.02]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(19)->id,
                'quantity' => 5.49]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(15)->id,
                'quantity' => 0.15]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(20)->id,
                'quantity' => 0.29]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(16)->id,
                'quantity' => 0.4]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(21)->id,
                'quantity' => 4.55]),
        ]);

        $slay = Formulation::create([
        'name' => 'Lezzo Slay Strawberry 50 Gram'
        ]);

        $slay->compositions()->saveMany([
            new Composition([
                'materialcategory_id' => MaterialCategory::find(1)->id,
                'quantity' => 75]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(4)->id,
                'quantity' => 24]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(2)->id,
                'quantity' => 15]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(5)->id,
                'quantity' => 9]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(6)->id,
                'quantity' => 3]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(10)->id,
                'quantity' => 0.275]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(8)->id,
                'quantity' => 0.24]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(9)->id,
                'quantity' => 0.3]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(22)->id,
                'quantity' => 0.1]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(18)->id,
                'quantity' => 0.3]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(23)->id,
                'quantity' => 5.25]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(15)->id,
                'quantity' => 0.15]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(24)->id,
                'quantity' => 0.04]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(16)->id,
                'quantity' => 0.5]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(12)->id,
                'quantity' => 0.048]),
        ]);

        $morie = Formulation::create([
        'name' => 'Morie Danish 100 Gram'
        ]);

        $morie->compositions()->saveMany([
            new Composition([
                'materialcategory_id' => MaterialCategory::find(1)->id,
                'quantity' => 75]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(2)->id,
                'quantity' => 14]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(4)->id,
                'quantity' => 27]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(5)->id,
                'quantity' => 8]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(6)->id,
                'quantity' => 1.5]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(8)->id,
                'quantity' => 0.72]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(10)->id,
                'quantity' => 0.5]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(9)->id,
                'quantity' => 0.35]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(11)->id,
                'quantity' => 1]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(22)->id,
                'quantity' => 0.1]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(18)->id,
                'quantity' => 1]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(12)->id,
                'quantity' => 0.047]),

            new Composition([
                'materialcategory_id' => MaterialCategory::find(16)->id,
                'quantity' => 0.63]),
        ]);
    }
}
    