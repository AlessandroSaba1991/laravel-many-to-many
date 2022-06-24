<?php

use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15; $i++) {
            $post = new Post();
            $post->title = $faker->sentence(3);
            $post->slug = Str::slug($post->title);
            $post->body = $faker->text(500);
            $post->image = 'https://picsum.photos/500/250?random=' . $i;
            $post->save();
        }
    }
}
