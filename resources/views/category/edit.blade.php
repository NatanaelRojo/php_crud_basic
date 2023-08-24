@extends('layouts.app')

@section('content')
<a href="{{ route('category.index') }}">
    < Back
</a>
<h1>Edit the category</h1>
@if ($errors->any())
    <ul>
        @foreach ($errors->Config::all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('category.destroy', $category->id) }}">
    @method('PUT')
    @csrf
    <label>New name: </label>
    <input type="text" name="name">
    <input type="submit" value="Update">
</form>
@endsection