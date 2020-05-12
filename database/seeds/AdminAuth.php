<!-- =========================================================================================
  Name: Toko Obat V1 Website
  Author: Muhammad Fauzan
  Author URL: http://fauzanishere.my.id
  Repository: https://github.com/fauzan121002/toko-obat-v1
  Community: Devover ID
  Community URL : http://devover.id
========================================================================================== -->
<?php

use Illuminate\Database\Seeder;

class AdminAuth extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_auth')->insert([
        	'email'=>'admin@smartpharmacy.com',
        	'password'=>Hash::make('smartpass'),
        	'level'=>'admin'
        ]);
    }
}
