<?php

use App\Models\Material;
use App\Models\MaterialCategory;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Material::create([
    		'code' => 'GD2361',
    		'name' => 'ACTIMALT DRIED RM C50 EX MUNTONS)',
    		'quantity' => 50,
            'materialcategory_id' => MaterialCategory::first()->id,
    	]);
    	Material::create([
    		'code' => 'GD1351',
    		'name' => 'AJI PLUS',
    		'quantity' => 50,
            'materialcategory_id' => MaterialCategory::first()->id,
    	]);
        Material::create([
            'code' => 'GD1298',
            'name' => 'ALKOHOL 96% FOOD GRADE',
            'quantity' => 30,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2144',
            'name' => 'ALKOHOL TEKNIS 96%',
            'quantity' => 40,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1372',
            'name' => 'AMF PAIL ANCHOR',
            'quantity' => 60,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1287',
            'name' => 'AMF VIV HOLLAND',
            'quantity' => 50,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1261',
            'name' => 'AMIJEL 121001',
            'quantity' => 50,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2037',
            'name' => 'AMMONIUM BICARBONATE',
            'quantity' => 20,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2369',
            'name' => 'AMMONIUM BICARBONATE EX. NISSAN, JEPANG',
            'quantity' => 50,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1275',
            'name' => 'AMMONIUM BICARBONATE EX. WEIFANG, CHINA',
            'quantity' => 40,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1391',
            'name' => 'ANTIOKSDIAN (SAPP PURON)',
            'quantity' => 50,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2375',
            'name' => 'APICHOC',
            'quantity' => 50,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2374',
            'name' => 'APICOTE',
            'quantity' => 50,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2368',
            'name' => 'ASAM JAWA POWDER',
            'quantity' => 50,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2236',
            'name' => 'BAKER MIX',
            'quantity' => 50,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1296',
            'name' => 'BANANA SD POWDER 10001223',
            'quantity' => 100,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1395',
            'name' => 'BEESWAX (SAK @25 KG)',
            'quantity' => 100,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1242',
            'name' => 'BERAS PECAH (RICE GRIT) MESH 24 # (SAK @25)',
            'quantity' => 50,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2195',
            'name' => 'BILACT MILK POWDER',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1206',
            'name' => 'BISKUT GEM NO 3E',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1205',
            'name' => 'BISKUT GEM SUPER KECILE',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2042',
            'name' => 'BISKUT KECIL BIASA (BARU)',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1266',
            'name' => 'BOESON TRENWAX',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2028',
            'name' => 'BUTTER VIV HOLLAND (EXPORT)',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2349',
            'name' => 'BUTTERSCOTCH 1109512323',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2312',
            'name' => 'CARAMEL POWDER A1000',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1233',
            'name' => 'CARNAUBAWAX SP 200 POWDER',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1347',
            'name' => 'CITRID ACID',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2049',
            'name' => 'COCOA BUTTER DELFI DF-100',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2355',
            'name' => 'COCOA BUTTER DEO',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2322',
            'name' => 'COCOA LIQUOR',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2321',
            'name' => 'COCOA LIQUOR AP100LN',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2320',
            'name' => 'COCOA LIQUOR IVORY 100%',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1279',
            'name' => 'COCOA POWDER DF-680-11 BR',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1265',
            'name' => 'COCOA POWDER 1000 HA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2051',
            'name' => 'COCOA POWDER ALKALIS 22/24 DP SAANDAM',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2139',
            'name' => 'COCOA POWDER ALKALIS PW',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1224',
            'name' => 'COCOA POWDER ALKALIZED CP 10',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1240',
            'name' => 'COCOA POWDER ALKALIZED DF 7100-23',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1286',
            'name' => 'COCOA POWDER ALKALIZED FA1',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2280',
            'name' => 'COCOA POWDER BLACK GCB G 96011 SB',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1267',
            'name' => 'COCOA POWDER DF 760-11',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2265',
            'name' => 'COCOA POWDER DL 72',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'MDK13',
            'name' => 'COCOA POWDER DRITTO 51 BMK',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2255',
            'name' => 'COCOA POWDER GD81 EX. CARGIL',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2248',
            'name' => 'COCOA POWDER P10 ALKALIS',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1268',
            'name' => 'COCOA POWDER WINDMOLEN A 000 T',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1371',
            'name' => 'COCONUT CREAM POWDER',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2180',
            'name' => 'COCONUT CREAM POWDER HIGH FAT 65',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2185',
            'name' => 'COCONUT CREAM POWDER PREMIUM',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2202',
            'name' => 'COCONUT CREAM POWDER PREMIUM',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1324',
            'name' => 'COCONUT MILK POWDER',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2045',
            'name' => 'KACANG POLONG JAIPONG',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1218',
            'name' => 'KEJU TOP CHIZ',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2143',
            'name' => 'KEJU WINCHEEZ 2KG REGULER',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2062',
            'name' => 'KOPI ARABICA 100%',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2296',
            'name' => 'KOPI INSTAN W17',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2063',
            'name' => 'KOPI ROBUSTA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2113',
            'name' => 'KOPI SUPER AAN',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2134',
            'name' => 'KURMA MESIR',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2133',
            'name' => 'KURMA SAYER',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2207',
            'name' => 'LACTAMOR DAIRY POWDER FAT 50',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1309',
            'name' => 'MACARONI',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2057',
            'name' => 'MALIC ACID EX. FUSO JAPAN',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1468',
            'name' => 'MALINDA BAKERS FAT',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2309',
            'name' => 'MALT EXTRAC DME',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1274',
            'name' => 'MALTODEXTRINE DE 10-12 MERK LI HUA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2271',
            'name' => 'MALTODEXTRINE XINGMAO',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2032',
            'name' => 'MARGARINE CITA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2142',
            'name' => 'MARGARINE CREAM MENARA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2329',
            'name' => 'MARGARINE DAN SHORTENING ROYAL PAMIA CREME',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1303',
            'name' => 'MARGARINE FORTUNE',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2160',
            'name' => 'MARGARINE FORVITA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1467',
            'name' => 'MARGARINE MALINDA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2130',
            'name' => 'MARGARINE MEDALIA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2314',
            'name' => 'MARGARINE PALMIA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2318',
            'name' => 'MARGARINE PALMIA SPESIAL',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1386',
            'name' => 'MARGARINE ROSE BRAND',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1210',
            'name' => 'MARGARINE TIARA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2017',
            'name' => 'MARGARINE VITAS',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2357',
            'name' => 'MARGARINE VITAS GOLD',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2128',
            'name' => 'MEG KEJU SERBAGUNA 2 KG',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2187',
            'name' => 'MENTHOL KRISTAL EX POLAR BEAR',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2131',
            'name' => 'MILK POWDER VONDALE',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2186',
            'name' => 'MILK REPLACER COWBELL',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2020',
            'name' => 'MINYAK GORENG BIB BOLA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2352',
            'name' => 'MINYAK GORENG FILMA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1248',
            'name' => 'MINYAK GORENG FORTUNE',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2308',
            'name' => 'MINYAK GORENG ROSE BRAND',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1305',
            'name' => 'MINYAK GORENG SOVIA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2245',
            'name' => 'MINYAK GORENG TROPICAL',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2382',
            'name' => 'MINYAK KELAPA BRACO',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2333',
            'name' => 'MINYAK KELAPA DELFICO BIB',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1260',
            'name' => 'MS INSTANT TEXTID A',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2039',
            'name' => 'NON DIARY CREAMER EC 30-10',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2285',
            'name' => 'NON DIARY CREAMER EC 30W',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2292',
            'name' => 'NON DIARY CREAMER F20K',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2184',
            'name' => 'NON DIARY CREAMER LK 32 RA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2172',
            'name' => 'NON DIARY CREAMER LK 35 RA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2213',
            'name' => 'NON DIARY CREAMER MILKAS',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2253',
            'name' => 'NON DIARY CREAMER VANA BLANCA 35 C',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2291',
            'name' => 'PALMVITA BUTTER OIL SUBSTITITE (BOS)',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2164',
            'name' => 'PANG PANG UDANG KMU',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1460',
            'name' => 'PANODAN 165',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'MDK20',
            'name' => 'CONDENSED MILK FLAVOUR 1666 CM',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2304',
            'name' => 'CORN GRITS MESH 24',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1434',
            'name' => 'CORN STRACH "CHINA"',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);                
        Material::create([
            'code' => 'GD2008',
            'name' => 'CORN STRACH EX.BOLA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2287',
            'name' => 'DAIRY FLAVOUR VANILLA M110300',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2179',
            'name' => 'DESICATED COCONUT HIGHT FAT',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1462',
            'name' => 'DESICATED COCONUT',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2203',
            'name' => 'DEXTROSE EX. LIHUA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2055',
            'name' => 'DEXTROSE MERK FU FENG',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1461',
            'name' => 'DIMODAN PH 320',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1429',
            'name' => 'ETHYL VANILLIN POWDER 1055',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2365',
            'name' => 'ETHYL VANILLIN SOLVAY',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2364',
            'name' => 'ETHYL VANILLINE VK',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2323',
            'name' => 'ETHYL VANILLINE ETERNAL PEARL',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2212',
            'name' => 'FCMP DAIRIX',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2298',
            'name' => 'FCMP EX AMPEC SINGAPORE',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1247',
            'name' => 'FCMP FONTERRA EX. NEW ZEALAND / NZMP',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1450',
            'name' => 'FCMP INDOMILK',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2246',
            'name' => 'FCMP INDOMILK @6KG',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1249',
            'name' => 'FCMP INDOMILK BULK',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1245',
            'name' => 'FCMP MURRAY GOULBURN EX. AUSTRALIA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1301',
            'name' => 'FCMP PROLAND',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2206',
            'name' => 'FCMP SYNLAIT',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2266',
            'name' => 'FILMA COOKING OIL BIB',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2267',
            'name' => 'FILMA PROFESSIONAL COOKING OIL BB',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2065',
            'name' => 'FLAVOUR ANGGUR R 0910175',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1478',
            'name' => 'FLAVOUR BANANA R 0910175',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2200',
            'name' => 'FLAVOUR BANANA FL2284',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1369',
            'name' => 'FLAVOUR BOURBON 839882',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1295',
            'name' => 'FLAVOUR BUTTER BCL 006',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2377',
            'name' => 'FLAVOUR BUTTER REPLACER PASTE 7888',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1288',
            'name' => 'FLAVOUR CHOCOLATE 116274',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1292',
            'name' => 'FLAVOUR CHOCOLATE 6055 CH',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2353',
            'name' => 'FLAVOUR CHOCOLATE GIVAUDAN FM-12-6763982',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1291',
            'name' => 'FLAVOUR CHOCOLATE MILK 201',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2275',
            'name' => 'FLAVOUR CHOCOLATE MILK PCA 6530',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2359',
            'name' => 'FLAVOUR CHOCOLATE OS E-1969739',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2129',
            'name' => 'FLAVOUR CHOCOLATE R 12168686',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2351',
            'name' => 'FLAVOUR CHOCOLATE SYMRISE 853665',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2301',
            'name' => 'FLAVOUR COCONUT OS R1605835',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1472',
            'name' => 'FLAVOUR COCOPANDAN E_1792428',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1385',
            'name' => 'FLAVOUR COKELAT 590471 T',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2272',
            'name' => 'FLAVOUR COKLAT OIL B2111 ED',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2279',
            'name' => 'FLAVOUR CONDENSED E_1832314',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2295',
            'name' => 'FLAVOUR CONDENSED E_1832314/01',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2269',
            'name' => 'FLAVOUR CONDENSED MILK 1109709350',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2332',
            'name' => 'FLAVOUR CONDENSED MILK E_1832314/02',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2199',
            'name' => 'FLAVOUR LEMON E_1780682',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2064',
            'name' => 'FLAVOUR MELON R 0910171',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2218',
            'name' => 'FLAVOUR MILK 103-1361812',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2219',
            'name' => 'FLAVOUR MILK 103-1362413',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1368',
            'name' => 'FLAVOUR MILK 962526',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2244',
            'name' => 'FLAVOUR MILK E_1756349',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1469',
            'name' => 'FLAVOUR MINT 63C10351',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2366',
            'name' => 'FLAVOUR MINT E-1954291',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2367',
            'name' => 'FLAVOUR MINT E-1954293',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1473',
            'name' => 'FLAVOUR MOCCA OS E_178560',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2061',
            'name' => 'FLAVOUR ORANGE R 1609435',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'PC.0001',
            'name' => 'PASTA CHOCOLATE - EKSPOR',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'PC.0002',
            'name' => 'PASTA CHOCOLATE - LOKAL',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'PC.0003',
            'name' => 'PASTA CHOCOLATE CHOCO BITZ',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2282',
            'name' => 'PATISY BUTTER BLEND',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2165',
            'name' => 'PILUS SUPER / JAGUNG AUSTRALIA 210',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2223',
            'name' => 'POTASIUM SORBATE',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2122',
            'name' => 'PROPYLINE GLYCOL',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2264',
            'name' => 'REVINAT BUTTER SUBTITUE',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2196',
            'name' => 'ROYAL HOLLAND MILK POWDER',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2188',
            'name' => 'SAPP PURON AG',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2268',
            'name' => 'SAPP ROR40 EX. HUBEI XINGFA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2161',
            'name' => 'SHORTENING ALLUCTOSA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2376',
            'name' => 'SHORTENING APICAL',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2372',
            'name' => 'SHORTENING BONAVIA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1304',
            'name' => 'SHORTENING FORTUNE',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1376',
            'name' => 'SHORTENING MAESTRO',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1419',
            'name' => 'SHORTENING MEDALIA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2150',
            'name' => 'SHORTENING MENARA BAKERS FAT CLASSIC',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2316',
            'name' => 'SHORTENING PALMIA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2317',
            'name' => 'SHORTENING PALMIA CREME',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2328',
            'name' => 'SHORTENING PALMIA PUTIH',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1378',
            'name' => 'SHORTENING ROSE BRAND',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1244',
            'name' => 'SHORTENING SOCOLATE 40 CARGIL',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2018',
            'name' => 'SHORTENING VITAS',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2149',
            'name' => 'SHORTENING WILLARINE 420',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1273',
            'name' => 'SIKLAMAT SUPER',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2153',
            'name' => 'SILVER BULLION BISCUIT FAT',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1231',
            'name' => 'SILVER BULLION COFAT 42',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'BBC2001',
            'name' => 'SIRUP COKLAT BIKANAN',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'BBC2002',
            'name' => 'SIRUP PUTIH BIKANAN',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'BBC2003',
            'name' => 'SIRUP SUSU BIKANAN',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2299',
            'name' => 'SKIM AMPEC SINGAPORE',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2204',
            'name' => 'SKIM ARMOR',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2242',
            'name' => 'SKIM ARMOR CHOC "ROLLER ORIED"',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1257',
            'name' => 'SKIM MILK FONTERRA EX. NEW ZEALAND',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1417',
            'name' => 'SKIM MILK POWDER (WARMAMBOOL-AUSTRALIA)',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2041',
            'name' => 'SKIM MILK POWDER SUNGOLD',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2381',
            'name' => 'SKIMED MILK POWDER AMMERLAND',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2241',
            'name' => 'SKIMED MILK POWDER VREMINI',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2224',
            'name' => 'SODIUM BENZOATE EX.CHINA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2038',
            'name' => 'SODIUM BICARBONATE',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1276',
            'name' => 'SODIUM BICARBONATE BC P EX. NOVACARB',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2274',
            'name' => 'SODIUM BONZOATE',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2273',
            'name' => 'SODIUM CHLORIDE (GARAM HALUS) NON YODIUM',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2035',
            'name' => 'SODIUM METABISULFIT',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2012',
            'name' => 'SORBITOL EX CARGIL',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2013',
            'name' => 'SORBITOL EX CHINA LINHUA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2331',
            'name' => 'SOYA LECITIN TOP 100',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1230',
            'name' => 'SOYA LECITIN TOP UB',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1307',
            'name' => 'SUPARIZE BAKING POWDER',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2201',
            'name' => 'SUSU BAKER KING',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1451',
            'name' => 'SUSU DAIRYVILLE',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1326',
            'name' => 'SUSU ECO',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2302',
            'name' => 'SUSU EUROMIX 10',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1258',
            'name' => 'SUSU FM -10',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1431',
            'name' => 'SWEET WHEY POWDER "AMMERLANDER"',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1422',
            'name' => 'SWEET WHEY POWDER EX. EPILAITA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2214',
            'name' => 'SWEET WHEY POWDER SMARTCOW',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1465',
            'name' => 'FLAVOUR PANDAN E_1792429',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2191',
            'name' => 'FLAVOUR PEPPERMINT R1621519',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1283',
            'name' => 'FLAVOUR PINEAPPLE R 0902545',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1282',
            'name' => 'FLAVOUR STRAWBERRY R 0925439',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2066',
            'name' => 'FLAVOUR STRAWBERRY E_1820945',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2354',
            'name' => 'FLAVOUR VANILLA BOURBON 839882',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1370',
            'name' => 'FLAVOUR VANILLA OS R 1605648',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2151',
            'name' => 'FOOD COLOUR ALLURA RED',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1213',
            'name' => 'FOOD COLOUR APPLE GREEN WS',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2156',
            'name' => 'FOOD COLOUR BETACAROTIN AT 3525 055 EXL',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2157',
            'name' => 'FOOD COLOUR BETACAROTIN CA 6700 A WS',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2154',
            'name' => 'FOOD COLOUR BETACAROTIN DAIRY MAX DARK ORANGE 1303 055',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2152',
            'name' => 'FOOD COLOUR BETACAROTIN VEQEX NC 2 CWS',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2078',
            'name' => 'FOOD COLOUR BRILLANT BLUE',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1212',
            'name' => 'FOOD COLOUR BROWN WS 313',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2080',
            'name' => 'FOOD COLOUR CARMOISINE',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1223',
            'name' => 'FOOD COLOUR NELICOL BROWN HT',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2072',
            'name' => 'FOOD COLOUR PONCHE 4 R',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2073',
            'name' => 'FOOD COLOUR PONCHE 4 R LAKE',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2136',
            'name' => 'FOOD COLOUR SUNSET YELLOW',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1208',
            'name' => 'FOOD COLOUR SUNSET YELLOW HS LAKE',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1219',
            'name' => 'FOOD COLOUR TARTAZINE',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1211',
            'name' => 'FOOD COLOUR TITANIUM DIOXIDE',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2283',
            'name' => 'FULL CREAM MILK POWDER',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'BBF-GAH001',
            'name' => 'GARAM HALUS',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2370',
            'name' => 'GARAM MURNI BERYODIUM REFINA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1237',
            'name' => 'GELATINE BLOOM 150 MESH 30 - BANGLADESH',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1222',
            'name' => 'GELATINE BLOOM 150 MESH 30 EX. CARTINO',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1225',
            'name' => 'GELATINE BLOOM 150 MESH 40 EX. ROUSELOTT',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2178',
            'name' => 'GELATINE EX. GLOBAL BLOOM MESH',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1271',
            'name' => 'GLUCOSE BRIX 75%',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1280',
            'name' => 'GOLD BULLION BOS',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1384',
            'name' => 'GOLD BULLION SUPERIOR',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1308',
            'name' => 'GOLD BULLION TREAT',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2234',
            'name' => 'GOLDEN FLAKE MILK FAT/AUSTRALIA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'BBF-GUP001',
            'name' => 'GULA PDSU R1',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2362',
            'name' => 'GULA PDSU R2',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2138',
            'name' => 'HIGHT FRUCTOSE SYRUP 55%',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2293',
            'name' => 'HIGHT FRUCTOSE SYRUP 55%',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2197',
            'name' => 'HIGHT FRUCTOSE SYRUP EX. CHINA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2235',
            'name' => 'HOLLMANN BUTTER',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2373',
            'name' => 'INSTANT COFFEE ACS 04-23',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2286',
            'name' => 'INSTANT COFFEE W713',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2281',
            'name' => 'INSTANT COFFEE WHC 248666',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2194',
            'name' => 'INSTANT FAT MILK M18',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2046',
            'name' => 'KACANG MERSI ASIN/KORO',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1209',
            'name' => 'TALCUM POWDER HAICHEN',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2034',
            'name' => 'TBHQ (TERSIER BUTIL HIDROQUINON)',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD0010',
            'name' => 'TELUR AYAM',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2208',
            'name' => 'TEPUNG ASIA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1310',
            'name' => 'TEPUNG BERAS JAGUNG',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1228',
            'name' => 'TEPUNG BERAS ROSE BRAND',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2252',
            'name' => 'TEPUNG BOLA SALJU',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1416',
            'name' => 'TEPUNG HANA BIRU',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1344',
            'name' => 'TEPUNG KUNCI BIRU PREMIUM',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2251',
            'name' => 'TEPUNG LENCANA MERAH',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1466',
            'name' => 'TEPUNG TAPIOKA AGROMAS',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2358',
            'name' => 'TEPUNG TAPIOKA BOLA DELI',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2220',
            'name' => 'TEPUNG TAPIOKA EX. THAILAND TAPIO PLUS 504',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1269',
            'name' => 'TEPUNG TAPIOKA GUNUNG AGUNG',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2174',
            'name' => 'TEPUNG TAPIOKA JEMUR MATAHARI',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2175',
            'name' => 'TEPUNG TAPIOKA SUPER YOKO',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2137',
            'name' => 'TEPUNG TAPIOKA TERONG MAS',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2237',
            'name' => 'TEPUNG TERIGU DRAGON FLY',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1388',
            'name' => 'TEPUNG TERIGU DUA PEDANG',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2263',
            'name' => 'TEPUNG TERIGU F10',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2313',
            'name' => 'TEPUNG TERIGU GREEN EAGLE',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1415',
            'name' => 'TEPUNG TERIGU HANA KUNING',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2182',
            'name' => 'TEPUNG TERIGU KAWAN BARU COKLAT',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2183',
            'name' => 'TEPUNG TERIGU KAWAN BARU HIJAU',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1255',
            'name' => 'TEPUNG TERIGU MILA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1259',
            'name' => 'TEPUNG TERIGU MONTANA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2249',
            'name' => 'TEPUNG TERIGU PAYUNG',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2311',
            'name' => 'TEPUNG TERIGU STUPA HIJAU',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2345',
            'name' => 'TEPUNG TERIGU SUNU BIRU',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1387',
            'name' => 'TEPUNG TERIGU WHITE BEAR',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1442',
            'name' => 'TESTING COST:KUKIS RASA MENTEGA (19.10.17)',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1252',
            'name' => 'TIARA BAKERS',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2243',
            'name' => 'TOFFIECO VANILLA BUTTER PASTA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1290',
            'name' => 'VANILIN CRYSTAL JULAN BRAND',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1424',
            'name' => 'VANILIN POLAR BEAR',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1428',
            'name' => 'VANILIN POWDER 853194',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2132',
            'name' => 'VANILIN VK',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2288',
            'name' => 'VANILLA CREAM OS E_1843226',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1336',
            'name' => 'VANILLIN CRYSTAL',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2058',
            'name' => 'VANILIN CRYSTAL EX SYMRISE',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2209',
            'name' => 'VANILLIN POWDER 50 KG',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2158',
            'name' => 'WHEY PERMEATE',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2284',
            'name' => 'WHEY POWDER',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1423',
            'name' => 'WHEY POWDER EX. EPILAITA',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD2205',
            'name' => 'WHEY TILAMOOK',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
        Material::create([
            'code' => 'GD1246',
            'name' => 'WMP OPEN COUNTRY DAIRY EX. NEW ZEALAND',
            'quantity' => 0,
            'materialcategory_id' => MaterialCategory::first()->id,
        ]);
    }
}   