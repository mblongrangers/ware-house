<?php

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Product::create([
    		'code' => 'AC01',
    		'name' => 'ASSORTED COOKIES (Box 5/300gr)',
    		'quantity' => 0,
    		'price' => 10000,
    		'category_id' => Category::first()->id,
    	]);
        Product::create([
            'code' => 'ACL0501',
            'name' => 'ASSORTED COOKIES LEBARAN (Box 5/300gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'B2001C',
            'name' => 'BERNIE BALL CHOCOLATE (Renceng 1/20/10 gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'B2001B',
            'name' => 'BERNIE BALL MIX (Renceng 1/20/10 gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'B1201S',
            'name' => 'BIMO SEALLYS (Toples 1/12/280 gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'BC101P',
            'name' => 'BISCUIT COATING (PIKORO)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'BC101T',
            'name' => 'BISCUIT COATING (TOBE)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'BC2001',
            'name' => 'BISCUIT MIX (Dus 1/40/45gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'CC3K',
            'name' => 'CHOCO CHIPS (Crt 1/3Kg)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'CC400',
            'name' => 'CHOCO BITZ CHIPS (Dus 1/40/40gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'CC4001',
            'name' => 'CHOCO CHIPS (Dus 1/40/40gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'CCKG',
            'name' => 'CHOCO CHIPS 3,5Kg',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'CC4002',
            'name' => 'CHOCO CHIPS PANDAN (Dus 1/40/40gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'CCTPL01',
            'name' => 'CHOCO CHIPS PANDAN (Tpl 1/3,5Kg)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'CC4003',
            'name' => 'CHOCO CHIPS STRAWBERRY (Dus 1/40/40gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'CCTPL',
            'name' => 'CHOCO CHIPS TOPLES (Tpl 1/3.5Kg)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'FB1201',
            'name' => 'FUNGKY BALL (Renceng 1/20/13gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'FBB5',
            'name' => 'FUNGKY BALL (Ball 1/5Kg)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'FBS9',
            'name' => 'FUNGKY BOLA BOLA SUSU',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'FBS200',
            'name' => 'FUNGKY BOLA BOLA SUSU (Renceng 1/20/10gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'G3001',
            'name' => 'GIGGLES (Bag 1/30/50gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'GD200',
            'name' => 'GOLDEN COKLAT (Renceng 1/100/14gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'GM200',
            'name' => 'GOLDEN MIX (Renceng 1/100/14gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'GD2001',
            'name' => 'GOLDEN BALL 500 (Renceng 1/100/14gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'GBM200',
            'name' => 'GOLDEN BALL 500 MIX (Renceng 1/20/14gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'GD1201',
            'name' => 'GOLDEN BALL TOPLES (Toples 1/12/100pcs)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'GDP121',
            'name' => 'GOLDEN PANDA MAS (TOPLES 1/12/100PCS)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'GD2305',
            'name' => 'GOODIE BAG Uk. 285MM x 285MM x 285MM',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'I1201',
            'name' => 'ICHI BALL (DUS 1/12/250gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'KK1201',
            'name' => 'KACANG KORO TING (Renceng 1/20/15gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'KP1201',
            'name' => 'KACANG POLONG TING (Renceng 1/20/15gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'LS4002',
            'name' => 'LARRYS MILK COOKIES STRAWBERRY SLAY (Dus 1/40/40gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'LBV3',
            'name' => 'LEZZO BLACK VANILLA (5Kg)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'LBEX244',
            'name' => 'LEZZO BUTTER COOKIES BANANA (Box 24/100gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'LB242',
            'name' => 'LEZZO BUTTER COOKIES BANANA (Box 24/100gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'LCB24',
            'name' => 'LEZZO BUTTER COOKIES CHOCOLATE (Box 24/100gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'L0241',
            'name' => 'LEZZO BUTTER COOKIES ORIGINAL (Box 24/100gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'L0EX243',
            'name' => 'LEZZO BUTTER COOKIES ORIGINAL (Box 24/100gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'LC1201',
            'name' => 'LEZZO CHOCOLATE (Renceng 1/20/14gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'LZ001',
            'name' => 'LEZZO COCONUT SARI KELAPA',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'LS4001',
            'name' => 'LEZZO SLAY (Dus 1/40/40gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'M2001A',
            'name' => 'MOMOCHO COKLAT',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'M2001B',
            'name' => 'MOMOCHO MIX',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'MDB24',
            'name' => 'MORIE BUTTER COOKIES (Box 24/100gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'MD4003',
            'name' => 'MORIE DANISH(Dus 1/40/40gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'MDK12',
            'name' => 'MORIE DANISH(Kaleng 1/12/454gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'MDKEX12',
            'name' => 'MORIE DANISH(Kaleng 1/12/454gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'PG2201',
            'name' => 'PAKET GOLD',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'PNJ301',
            'name' => 'PAKET POKA NATAL JINJING',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'P2001A',
            'name' => 'PIKORO COKLAT',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'P2001B',
            'name' => 'PIKORO MIX',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'P1201-B',
            'name' => 'POKA BALL (BESAR)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'P1201-K',
            'name' => 'POKA BALL (Toples 1/12/250gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'PB1201',
            'name' => 'POKA BALLS',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'PL1001',
            'name' => 'POKA LEBARAN (Box 1/10/4 Tpl)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'P2001W',
            'name' => 'POKA WINDOW (Dus 1/20/60 gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'SD4002',
            'name' => 'SAGU DOGER (Dus 1/40/40 gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'SGD3',
            'name' => 'SAGU DOGER (Tpl 1/3 Kg)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'SG1201',
            'name' => 'SAGU KEJU (Renceng 1/20/10 gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'SF4001',
            'name' => 'SAGU KEJU FAMILY (Dus 1/40/40 gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'SGM3K',
            'name' => 'SAGU MOCCA (Crt 1/3 Kg)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'SGM3',
            'name' => 'SAGU MOCCA (Toples 1/3 Kg)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'SGP3K',
            'name' => 'SAGU PANDAN (Crt 1/3 Kg)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'SGP3',
            'name' => 'SAGU PANDAN (Tpl 1/3 Kg)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'SSK3K',
            'name' => 'SAGU SALJU KEJU (Crt 1/3 Kg)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'SSK3',
            'name' => 'SAGU SALJU KEJU (Tpl 1/3 Kg)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'S3001A',
            'name' => 'SHASIE ORIGINAL CANDY',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'SM3001',
            'name' => 'SOMINTY (Bag 1/30/50 Pcs)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'SMEX3002',
            'name' => 'SOMINTY (Bag 1/30/50 Pcs)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'E2001',
            'name' => 'TAKTUKTUK COKLAT (emping)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'T2001A',
            'name' => 'TOBEBALL COKLAT',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'T2001B',
            'name' => 'TOBEBALL MIX',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'TDJ220',
            'name' => 'TOBE DRINK JAR (220)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'T2001C',
            'name' => 'TOM - TOM (Renceng 1/20/14 gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'WB1201',
            'name' => 'WINBALL (Renceng 1/20/14 gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'WM1201',
            'name' => 'WINBALL Renceng (Renceng 1/20/14 gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'ZMN24',
            'name' => 'ZEPY MIX NUTS (Pack 24/120 gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
    }
}
