<?php

use App\Sell;
use App\Product;

use Illuminate\Database\Seeder;

class SellTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sells = Product::create([
    		'code' => 'AC01',
    		'name' => 'ASSORTED COOKIES (Box 5/300gr)',
    		'quantity' => 0,
    		'price' => 10000,
    	]);
    }
}
