<?php

use Illuminate\Database\Seeder;

class BreedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('breeds')->insert([
        	'id'=>1, 'name' => "dometic",
        	'id'=>2, 'name' => "persian",
        	'id'=>3, 'name' => "siamese",
        	'id'=>4, 'name' => "abcs",
        ]);
    }
}
/*******p0--------*-=