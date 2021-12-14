@extends('layout')
@section('title', 'Posts')
@section('content')
    <a href="{{url()->previous()}}" class="btn btn-primary mb-3">Back</a>
    <form action="{{route('admin.posts.view', ['post'=>$post->id])}}" method="GET">
        @csrf
        <table class="table table-striped">
            <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created At</th>
            <th>Updated At</th>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                </tr>

            </tbody>
        </table>



    </form>
@endsection
