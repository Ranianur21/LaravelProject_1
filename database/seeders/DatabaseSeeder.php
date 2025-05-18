<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    $this->call([
        CategorySeeder::class,
        UserSeeder::class,
    ]);

    $users = User::all();
    $categories = Category::all();

     Post::factory(100)->make()->each(function ($post) use ($users, $categories) {
        $post->author_id = $users->random()->id;
        $post->category_id = $categories->random()->id;
        $post->save();
    });
}
}