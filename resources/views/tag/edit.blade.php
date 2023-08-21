@extends('layouts.app')

@section('content')
<a href="{{ route('tag.index') }}">
    < Back
</a>
<h1>Edit the tag</h1>
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form method="POST" action="{{ route('tag.update', $tag->id) }}">
    @method('PUT')
    @csrf    
    <label>New name: </label>
    <input type="text" name="name">
    <input type="submit" value="Update">
</form>
@endsection