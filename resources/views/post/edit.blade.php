@extends('layouts.app')

@section('content')
<a href="{{ route('posts.index') }}">
    < Back
</a>
<form method="POST" action="{{ route('posts.update', $post->id) }}">
    @method('PUT')
    @csrf
    <label>Title: </label>
    <input type="text" name="title">
    <label>Overview: </label>
    <input type="text" name="overview">
    <label>Content: </label>
        <input type="text" name="content">
        <input type="submit" value="Save">
</form>
@endsection