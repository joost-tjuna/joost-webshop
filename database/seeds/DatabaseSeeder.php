<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$image = '/images/kitty.jpg';
        DB::table('product')->insert([
            'name' => str_random(10),
            'stock' => str_random(10),
            'price' => str_random(10),
            'picture' => $image(10),
            'description' => str_random(10),
        ]);
    }
}
