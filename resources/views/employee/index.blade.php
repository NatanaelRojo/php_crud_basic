@extends('layouts.app')

@section('content')
    @forelse ($employees as $employee)
        <h2>{{ $employee->firstname }}</h2>
    @empty
        <h2>No employees</h2>
    @endforelse
@endsection