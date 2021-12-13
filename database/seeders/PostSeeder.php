<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(1000)->make()->each(function (Post $post) {
            $post->user()->associate(User::inRandomOrder()->first());
            $post->save();
        });
    }
}
