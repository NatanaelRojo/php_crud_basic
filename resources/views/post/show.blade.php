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
@endsection