<?php

namespace Database\Seeders;

use App\Models\Post;
use \App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // Post::truncate();
        // Category::truncate();

        $user = User::factory()->create();
        $personal = Category::create([
            "name"=>"Personal",
            "slug"=>"personal",

        ]);

        $user = User::factory()->create();
        $work = Category::create([
            "name"=>"Work",
            "slug"=>"work",

        ]);

        $user = User::factory()->create();
        $hobbies = Category::create([
            "name"=>"Hobbies",
            "slug"=>"hobbies",
        ]);
        Post::factory(5)->create([
            "user_id"=> $user->id,
            "category_id"=> $personal->id,
            "title"=>"My family post",
            "slug"=>"my-family-post",
            "excerpt"=>"<p>i love my family</p>",
            "body"=>"<p>families are so great i love having a family i hope eveyone has a wonderful family</p>"
        ]);

        Post::factory(5)->create([
            "user_id"=> $user->id,
            "category_id"=> $work->id,
            "title"=>"My work post",
            "slug"=>"my-work-post",
            "excerpt"=>"<p>working is so important</p>",
            "body"=>"<p>if you don't work you will starve to death like a dog that's why we work</p>"
        ]);

        Post::factory(5)->create([
            "user_id"=> $user->id,
            "category_id"=> $hobbies->id,
            "title"=>"My hobbies post",
            "slug"=>"my-hobbies-post",
            "excerpt"=>"<p>i have a lot of hobbies</p>",
            "body"=>"<p>like family and working and welding iron we all have so many hobbies what about you what hobbies do you have</p>"
        ]);
        Post::factory(5)->create();
    }
}
