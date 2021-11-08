@extends('layout')
@section('title', 'Posts')
@section('content')
    <a class="btn btn-primary" href="{{url()->previous()}}">Back</a>
    @foreach($posts as $post)
        <div class="col">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">ID: {{$post->id}}</h5>
                    <h5 class="card-title">Title: {{$post->title}}</h5>
                    <p class="card-text">Description: {{$post->body}}</p>
                    <a href="card-text">Created at: {{$post->created_at}}"</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
