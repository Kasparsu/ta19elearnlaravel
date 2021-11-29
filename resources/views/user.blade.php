@extends('layout')
@section('title', 'Home Page')
@section('content')
    <div>
            <h5 class="card-text">{{$user->name}}</h5>
        @foreach($user->posts as $post)
            <a href="/post/{{$post->id}}"></a>
    </div>
