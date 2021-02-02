<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {

            $new_posts = new Post();
            $new_posts->name = $faker->title;
            $new_posts->content = $faker->paragraph();
            $new_posts->img = $faker->imageUrl(640, 480, 'animals', true);
            $new_posts->save();
        }

    }
}
