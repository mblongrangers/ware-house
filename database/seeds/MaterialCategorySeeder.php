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
        	'name' => 'TEPUNG TERIGU'
        ]);
        MaterialCategory::create([
            'name' => 'MARGARIN'
        ]);
        MaterialCategory::create([
            'name' => 'PASTA COKLAT'
        ]);
        MaterialCategory::create([
            'name' => 'GULA'
        ]);
        MaterialCategory::create([
            'name' => 'SHORTENING'
        ]);
        MaterialCategory::create([
            'name' => 'TEPUNG TAPIOKA'
        ]);
        MaterialCategory::create([
            'name' => 'GLUKOSA'
        ]);
        MaterialCategory::create([
            'name' => 'PENGEMBANG'
        ]);
        MaterialCategory::create([
            'name' => 'LESITIN'
        ]);
        MaterialCategory::create([
            'name' => 'GARAM'
        ]);
        MaterialCategory::create([
            'name' => 'TELUR'
        ]);
        MaterialCategory::create([
            'name' => 'PREMIX RM'
        ]);
        MaterialCategory::create([
            'name' => 'PREMIX CHOCOBITZ'
        ]);
        MaterialCategory::create([
            'name' => 'PREMIX EMULSI'
        ]);
        MaterialCategory::create([
            'name' => 'PREMIX L50'
        ]);
        MaterialCategory::create([
            'name' => 'PREMIX D'
        ]);
        MaterialCategory::create([
            'name' => 'PREMIX LCHo3'
        ]);
        MaterialCategory::create([
            'name' => 'PREMIX Butman'
        ]);
        MaterialCategory::create([
            'name' => 'PREMIX LCHo1'
        ]);
        MaterialCategory::create([
            'name' => 'PREMIX LCHo4'
        ]);
        MaterialCategory::create([
            'name' => 'PREMIX Biang'
        ]);
        MaterialCategory::create([
            'name' => 'PREMIX HFS'
        ]);
        MaterialCategory::create([
            'name' => 'PREMIX L550'
        ]);
        MaterialCategory::create([
            'name' => 'PREMIX OLY'
        ]);
    }
}
