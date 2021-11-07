@extends('layout')
@section('title', 'posts')
@section('content')
    <a href="{{ url()->previous() }}" class="btn btn-primary mb-3">Back</a>
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        @error('title')
            @foreach($errors->all('title') as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @enderror
        <div class="mb-3">
            <label for="titleInput" class="form-label">Title</label>
            <input type="text" class="form-control" id="titleInput" placeholder="How to Post">
        </div>
        <div class="mb-3">
            <label for="contentInput" class="form-label">Content</label>
            <textarea class="form-control" id="contentInput" rows="3"></textarea>
        </div>
        <input class="btn btn-primary" type="submit">
    </form>
@endsection
