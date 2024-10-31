<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comment as CommentModel;
use App\Models\Post as PostModel;
use Faker\Factory as Faker;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');

        //ambil semua data post untuk dihubungkan ke comment
        $post = PostModel::all();

        for ($i=0; $i < 20; $i++) { 
            CommentModel::create([
                'post_id' => $post->random()->id,
                'body' => $faker->paragraph(),
            ]);
        }
    }
}
