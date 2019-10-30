<?php

use App\Tag;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Post::class, 14)->create()->each(function ($post){
            $post->Tags()->save(factory(App\Tag::class)->make());
        });
    }
}
