<?php

use App\EditionDiscount
use Illuminate\Database\Seeder;

class EditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RegulerDiscount::create([
    		'rate' => 1.5,
    		'limit' => 4,
    		'status' => 'Active',
    	]);
    	RegulerDiscount::create([
    		'rate' => 2.0,
    		'limit' => 5,
    		'status' => 'Active',
    	]);
    	RegulerDiscount::create([
    		'rate' => 2.5,
    		'limit' => 6,
    		'status' => 'Active',
    	]);
    }
}
