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
            'name' => 'MARGARINE'
        ]);
        MaterialCategory::create([
            'name' => 'PASTA COKLAT'
        ]);
        MaterialCategory::create([
            'name' => 'VANILIN'
        ]);
        MaterialCategory::create([
            'name' => 'TAPIOKA'
        ]);
        MaterialCategory::create([
            'name' => 'GULA HALUS'
        ]);
        MaterialCategory::create([
            'name' => 'GARAM HALUS'
        ]);
        MaterialCategory::create([
            'name' => 'CMP/CCP'
        ]);
        MaterialCategory::create([
            'name' => 'BAKERKING'
        ]);
        MaterialCategory::create([
            'name' => 'SUSU PROLAND'
        ]);
        MaterialCategory::create([
            'name' => 'SIKLAMAT'
        ]);
        MaterialCategory::create([
            'name' => 'SAPP'
        ]);
        MaterialCategory::create([
            'name' => 'FLV. SUSU'
        ]);
        MaterialCategory::create([
            'name' => 'FLV. PANDAN'
        ]);
        MaterialCategory::create([
            'name' => 'MESIS / CHOCOCHIPS'
        ]);
        MaterialCategory::create([
            'name' => 'FC. APPLE GREEN'
        ]);
        MaterialCategory::create([
            'name' => 'SOBIC'
        ]);
        MaterialCategory::create([
            'name' => 'GLUKOS'
        ]);
        MaterialCategory::create([
            'name' => 'SOYA'
        ]);
        MaterialCategory::create([
            'name' => 'WHEY'
        ]);
        MaterialCategory::create([
            'name' => 'TERIGU'
        ]);
        MaterialCategory::create([
            'name' => 'PREMIX'
        ]);
        MaterialCategory::create([
            'name' => 'SHORTENING'
        ]);
    }
}
