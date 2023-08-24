@extends('layouts.app')

@section('content')
<a href="{{route('posts.index') }}">
    < Back
</a>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <label for="title">Title: </label>
    <input type="text" name="title" id="title">
    <label for="overview">Overview: </label>
    <input type="text" name="overview" id="overview">
    <label for="content">Content: </label>
    <input type="text" name="content" id="content">
    @foreach ($categories as $category)
        <label>
            <input type="radio" name="category_id" value="{{ $category->id }}">
            {{ $category->name}}
        </label>
    @endforeach
    <label for="tags">Select tags</label>
    <select multiple name="tags[]" id="tags">
        @foreach ($tags as $tag)
        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
        @endforeach
    </select>
    <input type="submit" value="Submit">
</form>
@endsection