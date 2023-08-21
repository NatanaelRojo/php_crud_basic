@extends('layouts.app')

@section('content')
<a href="{{ route('tag.index') }}">
    < Back
</a>
<h2>Create a new tag</h2>
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('tag.store') }}">
    @csrf
    <label>Name: </label>
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>
@endsection