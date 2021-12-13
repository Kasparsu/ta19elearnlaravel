<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Faker\Factory;
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
        $posts = Post::all();
        $users = User::all();
        $faker = Factory::create();
        foreach ($posts as $post){
            Comment::factory(rand(0,10))->make(['post_id' => $post->id])->each(function ($comment) use($users, $posts,$faker){
                $comment->user_id = $users->random()->id;
                $comment->save();
            });

        }
//        Comment::factory(1000)->make()->each(function (Comment $comment) {
//            $comment->user()->associate(User::inRandomOrder()->first());
//            $comment->post()->associate(Post::inRandomOrder()->first());
//            $comment->save();
//        });
    }
}
