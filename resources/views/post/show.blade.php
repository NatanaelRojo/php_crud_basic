@extends('layouts.app')

@section('content')
<a href="{{ route('posts.index') }}">
    < Back
</a>
<h1>{{ $post->title }}</h1>
<h2>{{ $post->overview }}</h2>
<p>{{ $post->content }}</p>
<h2>Category</h2>
<p>{{ $post->category->name }}</p>
<h2>Tags</h2>
@foreach ($post->tags as $tag)
    <p>{{ $tag->name }}</p>
@endforeach
<h1>Add a comment</h1>
<form method="POST" action="{{ route('comment.store') }}">
    @csrf
    <input type="hidden" name="post_id" value="{{ $post->id }}"">
    <label for="content">Comment: </label>
    <input type="text" name="content" id="content">
    <input type="submit" value="Comment">
</form>
<h2>Comments</h2>
@forelse($post->comments as $comment)
    <div>
        <p>{{ $comment->content }}</p>
    </div>
@empty
    <p>No comments</p>
@endforelse
@endsection