@extends('layouts.app')

@section('content')
<a href="{{ route('category.index') }}">
    < Back
</a>
<h1>Create a new category</h1>
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form method="POST" action="{{ route('category.store') }}">
    @csrf
    <label>Name: </label>
    <input type="text" name="name">
    <input type="submit" value="Create">
</form>
@endsection