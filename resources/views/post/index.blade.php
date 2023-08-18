@extends('layouts.app')

@section('content')
<br>
<a href="{{ route('posts.create') }}" class="bg-black hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    New Post
</a>
<br>
    @forelse ($posts as $post)
        <a href="{{ route('posts.show', $post->id) }}">
            <h1>{{ $post->title }}</h1>
        </a>
        <a href="{{ route('posts.edit', $post->id) }}">edit</a>
        <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
            @method('DELETE')
            @csrf
            <input type="submit" value="Delete">
        </form>
    @empty
        <h1>No posts</h1>
    @endforelse
@endsection