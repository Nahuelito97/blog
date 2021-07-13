<?php

use App\Category;
use App\Tag;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;


class DatabaseSeeder extends Seeder
{


    public function run()
    {

        //Storage::makeDirectory('posts');

        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(TagSeeder::class);
        $this->call(PostSeeder::class);
    }
}
