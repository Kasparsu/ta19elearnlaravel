@extends('layout')
@section('title', $post->title)
@section('content')
    <a class="btn btn-primary" href="{{url()->previous()}}">Back</a>
    <div class="card mt-3">
        @if($post->images->count() > 1)
            @include('partials.carousel', ['images' => $post->images, 'id' => $post->id])
        @elseif($post->images->count() == 1)
            <img src="{{$post->images->first()->path}}" class="card-img-top" alt="...">
        @endif
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{!! $post->displayBody !!}</p>
        </div>
    </div>
    <h3>Comments</h3>

    <input type="text" class="form-control" id="title" name="title" required value="{{old('title')}}">
    <a class="btn btn-primary" href="{{route('admin.posts.comment', ['post'=> $post->id])}}", method="POST">Submit</a>

    @foreach ($post->comments as $comment)
        <p>{{ $comment->user->name }} {{$comment->created_at}}</p>
        <p>{{ $comment->body }}</p>
        <hr>
    @endforeach
@endsection
