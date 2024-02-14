<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;



class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for($i=0; $i <= 20 ; $i++){
            DB::table('genders')->insert([
                'item_name' => $faker->name,
                'item_desc' => $faker->text,
                'price' => $faker->randomDigit,
            ]);
        }
    }
}
