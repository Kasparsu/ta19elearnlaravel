@extends('layout')
@section('title', 'Home Page')
@section('content')
    {{$posts->links()}}
    <div class="row row-cols-4">
        @foreach($posts as $post)
            <div class="col">
                <div class="card mt-3">
                    @if($post->images->count() > 1)
                        @include('partials.carousel', ['images' => $post->images, 'id' => $post->id])
                    @elseif($post->images->count() == 1)
                        <img src="{{$post->images->first()->path}}" class="card-img-top" alt="...">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">{{$post->snippet}}</p>
                        <p class="text-muted">{{$post->user->name}}</p>
                        <a href="/post/{{$post->id}}" class="btn btn-primary">Read more!</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{$posts->links()}}
@endsection
