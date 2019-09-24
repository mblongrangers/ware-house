<?php

use App\Models\MaterialCategory;
use Illuminate\Database\Seeder;

class MaterialCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MaterialCategory::create([
        	'name' => 'AMBIC'
        ]);
        MaterialCategory::create([
            'name' => 'KEJU'
        ]);
        MaterialCategory::create([
            'name' => 'MINYAK GORENG KELAPA'
        ]);
        MaterialCategory::create([
            'name' => 'MINYAK GORENG SAWIT'
        ]);
        MaterialCategory::create([
            'name' => 'MARGARIN'
        ]);
        MaterialCategory::create([
            'name' => 'PASTA COKLAT'
        ]);
        MaterialCategory::create([
            'name' => 'VANILIN'
        ]);
        MaterialCategory::create([
            'name' => 'WHEY'
        ]);
        MaterialCategory::create([
            'name' => 'TEPUNG'
        ]);
        MaterialCategory::create([
            'name' => 'PREMIX'
        ]);
    }
}
