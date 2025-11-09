<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker; 
use App\Models\Article; 
use App\Models\Writer;
use App\Models\Category;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(); 

        $writers = Writer::all();
        $categories = Category::all();
        $arrImagePath = [
            'img/1.jpg',
            'img/2.jpg',
            'img/3.jpg',
            'img/4.jpg',
            'img/5.webp',
            'img/6.jpg',
            'img/7.jpg',
            'img/8.webp',
            'img/9.jpg',
            'img/10.jpg',
        ];

        for($i = 0; $i < 10; $i++){
            Article::create([
                'writer_id' => $writers->random()->id,
                'title'=>$faker->sentence(),
                'details'=>$faker->paragraph(10),
                'image'=> $faker->randomElement($arrImagePath),
                'date' => $faker->dateTimeBetween('2025-01-01', '2025-12-31')->format('Y-m-d'),
                'category_id' => $categories->random()->id,
            ]);
        }
    }
}
