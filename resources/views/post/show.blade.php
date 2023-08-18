@extends('layouts.app')

@section('content')
<a href="{{ route('posts.index') }}">
    < Back
</a>
<h1>{{ $post->title }}</h1>
<h2>{{ $post->overview }}</h2>
<p>{{ $post->content }}</p>
@endsection