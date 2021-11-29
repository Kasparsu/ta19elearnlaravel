<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class commentController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function store(CommentRequest $request, Post $post)
    {

        $comment = new Comment();
        $comment->body = $request->input('body');
        $comment->user()->associate(auth()->user());
        $comment->post()->associate($post);
        $comment->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }
}
