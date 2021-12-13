<?php

namespace App\Http\Controllers;

use App\Models\Post;
<<<<<<< Updated upstream
=======
use App\Models\Tag;
use App\Models\User;
>>>>>>> Stashed changes
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class HomeController extends Controller
{
    public function index(){
        $posts = Post::paginate(16);
        return view('index', compact('posts'));
    }

    public function post(Post $post) {
        return view('post', compact('post'));
    }
<<<<<<< Updated upstream
=======
    public function tag(Tag $tag){
        $posts = $tag->posts()->latest()->paginate(16);
        return view('index', compact('posts'));
    }
    public function user(User $user){
        $posts = $user->posts()->latest()->paginate(16);
        return view('index', compact('posts'));
    }
>>>>>>> Stashed changes
}
