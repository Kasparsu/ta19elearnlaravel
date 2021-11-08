@extends('layout')
@section('title', 'Posts')
@section('content')
    <a href="{{url()->previous()}}" class="btn btn-primary mb-3">Back</a>
    <form action="{{route('admin.posts.update', ['post' => $post -> id])}}" method="POST">
        @csrf
        @error('title')
        @foreach($errors->get('title') as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
        @endforeach
        @enderror
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required value="{{old('title') ?? $post -> title}}">
        </div>
        @error('body')
        @foreach($errors->get('body') as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
        @endforeach
        @enderror
        <div class="mb-3">
            <label for="body" class="form-label">Content</label>
            <textarea class="form-control" id="body" rows="3" name="body" required>{{old('body')}}</textarea>
        </div>
        <input class="btn btn-primary" type="submit">
    </form>
@endsection
