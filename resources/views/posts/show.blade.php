@extends('layout')
@section('title', 'Posts')
@section('content')
    <a class="btn btn-primary" href="{{url()->previous()}}">Back</a>
    @foreach($posts as $post)
    <div class="col">
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->body}}</p>
                <a href="card-text">{{$post->created_at}}"</a>
            </div>
        </div>
    </div>
    @endforeach
@endsection
