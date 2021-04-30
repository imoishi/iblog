<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        User::truncate();
        Category::truncate();
        Tag::truncate();
        Post::truncate();

        factory(User::class, 50)->create();
        factory(Category::class, 6)->create();
        factory(Tag::class, 50)->create();

        $posts = factory(Post::class, 250)->create()->each(function ($post) {
           $tags = Tag::get()->random(mt_rand(1, 3))->pluck('id');
           $post->tags()->sync($tags);
        });

//        foreach ($posts as $post) {
//            $post->tags()->sync(mt_rand(1, 50));
//        }
    }
}
