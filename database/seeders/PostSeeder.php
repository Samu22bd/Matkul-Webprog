<?php

namespace Database\Seeders;

use App\Models\Post as PostModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // inisialisasi faker dengan bahasa indonesia
        $faker = Faker::create('id_ID');
        for ($i=0; $i < 20; $i++) { 
            # code...
            PostModel::create([
                'title' => $faker->word,
                "body" => $faker->text
            ]);
        }
    }
}
