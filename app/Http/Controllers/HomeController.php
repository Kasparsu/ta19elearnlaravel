<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
}
