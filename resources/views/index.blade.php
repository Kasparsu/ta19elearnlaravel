@extends('layout')
@section('title', 'Home Page')
@section('content')
    {{ $posts -> links() }}
    <div class="row row-cols-4">
        @foreach($posts as $post)
            <div class="col">
                <div class="card mt-3">
    {{--                <img src="..." class="card-img-top" alt="...">--}}
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">{{$post->snippet}}</p>
                        <a href="/post/{{$post->id}}" class="btn btn-primary">Read more!</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $posts -> links() }}
@endsection
