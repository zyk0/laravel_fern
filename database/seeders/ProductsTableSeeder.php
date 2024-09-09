<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		for($i = 1; $i < 13; $i++)
		DB::table('products')->insert([
			'title' => 'product '.$i,
			'price' => rand(300, 7500),
			'in_stock' => 0,
			'description' => ' Herbs and spices are substances that come from plants you can use to enhance the flavor of your food. ',
			'created_at' => '2017-06-04 12:30:00',
		]);
    }
}
