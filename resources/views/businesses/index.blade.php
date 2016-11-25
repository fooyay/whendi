@extends('layouts.master')

@section('content')
    <h1>List of Businesses</h1>

    @foreach ($businesses as $business)
        <div><a href="/businesses/{{ $business->id }}">{{ $business->name }}</a></div>
    @endforeach
@stop
