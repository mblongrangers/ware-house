<?php

use App\Role;
use App\Models\BackpackUser;
use Illuminate\Database\Seeder;

class MonarreAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BackpackUser::create([
            'name' => 'Admin Monarre',
            'email' => 'admin@monarre.com',
            'password' => bcrypt('12345'),
        ]);

        Role::find(Role::PRODUCTION)->users()->create([
            'name' => 'Produksi Monarre',
            'email' => 'produksi@monarre.com',
            'password' => bcrypt('123456'),
        ]);

        Role::find(Role::GUDANG)->users()->create([
           'name' => 'Gudang Monarre',
           'email' => 'gudang@monarre.com',
           'password' => bcrypt('12345') 
        ]);

        Role::find(Role::FINANCE)->users()->create([
           'name' => 'Finance Monarre',
           'email' => 'finance@monarre.com',
           'password' => bcrypt('123456') 
        ]);

        Role::find(Role::PACKING)->users()->create([
           'name' => 'Packing Monarre',
           'email' => 'packing@monarre.com',
           'password' => bcrypt('123456789') 
        ]);
    }
}
