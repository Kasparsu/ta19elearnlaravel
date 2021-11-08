@extends('layout')
@section('title', $post->title)
@section('content')
    <a class="btn btn-primary" href="{{url()->previous()}}">Back</a>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <td>{{ $post->id }}</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{ $post->title }}</td>
        </tr>
        <tr>
            <th>Body</th>
            <td>{{ $post->body }}</td>
        </tr>
        <tr>
            <th>Created At</th>
            <td>{{ $post->created_at }}</td>
        </tr>
        <tr>
            <th>Updated At</th>
            <td>{{ $post->updated_at }}</td>
        </tr>
        </tbody>
    </table>
@endsection
