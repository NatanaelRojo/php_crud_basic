@extends('layouts.app')

@section('content')
<a href="{{ route('tag.create') }}">
    Create Tag
</a>
@forelse ($tags as $tag)
<div>
    <a href="{{ route('tag.show', $tag->id) }}">
        <h2>{{ $tag->name }}</h2>
    </a>
    <a href="{{ route('tag.edit', $tag->id) }}">
        Edit
    </a>
    <form method="POST" action="{{ route('tag.destroy', $tag->id) }}">
        @method('DELETE')
        @csrf
        <input type="submit" value="Delete">
    </form>
</div>
@empty
<h3>No tags</h3>
@endforelse
@endsection