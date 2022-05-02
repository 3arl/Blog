<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
//        Post::truncate();

        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'slug'=> 'john_doe'
        ]);
        User::factory()->create([
            'name' => 'Jane Doe',
            'email' => 'janedoe@example.com',
            'slug'=> 'jane_doe'
        ]);
        User::factory()->create([
            'name' => 'Jake Doe',
            'email' => 'jakedoe@example.com',
            'slug'=> 'jake_doe'
        ]);



        Category::factory()->create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        Category::factory()->create([
            'name' => 'Family',
            'slug' => 'family',
        ]);
        Category::factory()->create([
            'name' => 'Work',
            'slug' => 'work',
        ]);

//        Post::factory()->create([
//            'user_id'=>random_int(1,3),
//            'category_id'=>random_int(1,3),
//            'slug'=>'test-slug',
//            'title'=>'Test Title',
//            'excerpt'=>'Test Excerpt',
//            'body'=>'body',
//        ]);


        Post::factory(35)->create();


    }
}
