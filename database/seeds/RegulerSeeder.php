<?php

use App\RegulerDiscount;
use Illuminate\Database\Seeder;

class RegulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RegulerDiscount::create([
    		'rate' => 0.0,
    		'bellow' => 79000,
    		'upper' => 14999000,
    		'status' => 'Active',
    	]);
    	RegulerDiscount::create([
    		'rate' => 2.0,
    		'bellow' => 1500000,
    		'upper' => 2999000,
    		'status' => 'Active',
    	]);
    	RegulerDiscount::create([
    		'rate' => 3.0,
    		'bellow' => 3000000,
    		'upper' => 4999000,
    		'status' => 'Active',
    	]);
    	RegulerDiscount::create([
    		'rate' => 5.0,
    		'bellow' => 5000000,
    		'upper' => 6999000,
    		'status' => 'Active',
    	]);
    }
}
