<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {

        $posts = factory(Post::class, 20)->create();

        foreach($posts as $post){
            $post->tags()->attach([
                rand(1, 5),
                rand(5, 10),
            ]);
        }
    }
}
