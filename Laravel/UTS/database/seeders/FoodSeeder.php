<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create('id_ID');


        for($i=0; $i <= 20 ; $i++){
            DB::table('food')->insert([
                'title' => "Resep Gyoza Babi Enak",
                'author' => $faker->name,
                'category' => 'Sarapan',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, officiis dolor enim ex beatae id architecto voluptatem veritatis cupiditate dolorum amet ipsum explicabo deserunt consectetur est facilis rerum tempora, hic quos debitis repellat dignissimos at. Qui nobis, magnam quia necessitatibus earum libero expedita rem ad explicabo reiciendis architecto ab aperiam?',
                'short_desc' => $faker->paragraph,
    
            ]);
        }


        DB::table('food')->insert([
            'title' => "Resep pink lemonade",
            'author' => 'tipen',
            'category' => 'minuman',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, officiis dolor enim ex beatae id architecto voluptatem veritatis cupiditate dolorum amet ipsum explicabo deserunt consectetur est facilis rerum tempora, hic quos debitis repellat dignissimos at. Qui nobis, magnam quia necessitatibus earum libero expedita rem ad explicabo reiciendis architecto ab aperiam?',
            'short_desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel magni laudantium commodi libero cupiditate unde, ea qui dignissimos iusto inventore.',

        ]);
        DB::table('food')->insert([
            'title' => "Resep teri kacang pedas asin",
            'author' => 'kenneth',
            'category' => 'cemilan',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, officiis dolor enim ex beatae id architecto voluptatem veritatis cupiditate dolorum amet ipsum explicabo deserunt consectetur est facilis rerum tempora, hic quos debitis repellat dignissimos at. Qui nobis, magnam quia necessitatibus earum libero expedita rem ad explicabo reiciendis architecto ab aperiam?',
            'short_desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel magni laudantium commodi libero cupiditate unde, ea qui dignissimos iusto inventore.',
        ]);
        
        DB::table('food')->insert([
            'title' => "bubur campur",
            'author' => 'kenneth',
            'category' => 'sarapan',
            'description' => 'BUBURRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRBUBURRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRBUBURRRRRRRRRRRR RRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRBUBURRRRRRRRRRRRRRRRRRRRRR RRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRBUBURRRRRRRRRRRRRRRRRRRRR RRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRBU BURRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR',
            'short_desc' => 'BUBURRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR RRRRRRRBUBURRRRRRRR RRRRRRRRRRRRRRRRRRRRRRRR RRRRRRRRRRRRRRRRRRRRRRRRRR',
        ]);
    }
}

