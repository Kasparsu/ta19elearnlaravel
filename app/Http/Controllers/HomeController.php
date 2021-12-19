<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class HomeController extends Controller
{
    public function index() {
        $posts = Post::latest()->paginate(16);
        return view('index', compact('posts'));
    }
    public function post(Post $post) {
        return view('post', compact('post'));
    }
<<<<<<< Updated upstream
    public function tag(Tag $tag) {
        $posts = $tag->posts()->latest()->paginate(16);
        return view('index', compact('posts'));
    }
=======

    public function tag(Tag $tag){
        $posts = $tag->posts()->latest()->paginate(16);
        return view('index', compact('posts'));
    }

    public function user(User $user) {
        $posts = $user->posts()->latest()->paginate(16);
        return view('user', compact('posts', "user"));
    }
>>>>>>> Stashed changes
}
