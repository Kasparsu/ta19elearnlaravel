<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::factory(3000)->make()->each(function (Comment $comment){
            $comment->user()->associate(User::inRandomOrder()->first());
            $comment->post()->associate(Post::inRandomOrder()->first());
            $comment->save();
        });
    }
}
