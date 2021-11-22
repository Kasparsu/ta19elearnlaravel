<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::factory(1000)->make()->each(function (Comment $comment) {
            $comment->user()->associate(User::inRandomOrder()->first());
            $comment->post()->associate(Post::inRandomOrder()->first());
            $comment->save();
        });
    }
}
