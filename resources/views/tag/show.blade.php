@extends('layouts.app')

@section('content')
<a href="{{ route('tag.index') }}">
    < Back
</a>
<h1>{{ $tag->name }}</h1>
@endsection