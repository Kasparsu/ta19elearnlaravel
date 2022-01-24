<div class="crd my-2">
    <div class="card-body">
        <p class="card-text"></p>
        @foreach($posts as $post)
            <p class="text-muted">Posts: {{$post->user->posts()->count()}}</p>
            <p class="text-muted">Comments: {{$post->user->comments()->count()}}</p>
            <p class="text-muted">Comments on posts</p>
            @break
        @endforeach
    </div>
</div>
