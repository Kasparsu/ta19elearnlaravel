@extends('layout')
@section('title', $post->title)
@section('content')
    <div>
        <input type="text" class="form-control" id="title" name="title" required value="{{old('title')}}">
        <a class="btn btn-warning" href="{{route('admin.posts.edit', ['post'=> $post->id]), "/post/[$post->id] }}">Submit</a>
    </div>

@endsection
