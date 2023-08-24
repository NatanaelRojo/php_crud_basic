@extends('layouts.app')

@section('content')
<h2>Categories</h2>
<a href="{{ route('category.create') }}">
    New category
</a>
@forelse ($categories as $category)
    <a href="{{ route('category.show', $category->id) }}">
        <h3>{{ $category->name }}</h3>
    </a>
    <a href="{{ route('category.edit', $category->id) }}">
    Edit
    </a>
    <form method="POST" action="{{ route('category.destroy', $category->id) }}">
        @method('DELETE')
        @csrf
        <input type="submit" value="Delete">
    </form>
@empty
    <h2>No categories</h2>
@endforelse
@endsection