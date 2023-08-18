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
    <label>Title: </label>
    <input type="text" name="title">
    <label>Overview: </label>
    <input type="text" name="overview">
    <label>Content: </label>
    <input type="text" name="content">
    <input type="submit" value="Submit">
</form>
@endsection