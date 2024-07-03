@extends("layout.default")

@section("content")
    <h2 class="text-center">{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
    <small>Author: {{ $post->user->first_name }} {{ $post->user->last_name }}</small>

    @include("components.createcomment")

    @foreach ($post->comments as $comment)
        <p style="margin-bottom: 10px;">{{ $comment->content }}</p>
        <small class="mb-4" style="display: block; margin-bottom: 20px;">Author: {{ $comment->user->first_name }} {{ $comment->user->last_name }}</small>
    @endforeach
@endsection

