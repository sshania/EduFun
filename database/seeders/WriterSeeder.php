<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker; 
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(); 

        Writer::create([
            'name' => 'Raka Putra Wicaksono',
            'title' => 'Spesialis Interactive Multimedia',
            'imagePath' => 'img/raka.png'
        ]);

        Writer::create([
            'name' => 'Bia Mecca Annisa',
            'title' => 'Spesialis Data Science',
            'imagePath' => 'img/bia.png'
        ]);

        Writer::create([
            'name' => 'Abi Firmansyah',
            'title' => 'Spesialis Network Security',
            'imagePath' => 'img/abi.png'
        ]);

        // Semisal mau generate Seeder Writer 

        // $arrImagePath = ['img/abi.png', 'img/raka.png', 'img/bia.png'];

        // for($i = 1; $i <= 5; $i++){
        //     Writer::create([
        //         'name' => $faker->name,
        //         'title' => $faker->jobTitle,
        //         'imagePath' => $faker->randomElement($arrImagePath)
        //     ]);
        // }
    }
}
