<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Factory  as Faker;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 100)->create()->each(function ($post) {
            $faker = Faker::create();
            $image = 'https://loremflickr.com/640/680?kitten=' . $faker->numberBetween(1, 30);
            $post->addMediaFromUrl($image)->toMediaCollection('post_images');
        });
    }
}
