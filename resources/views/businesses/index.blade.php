@extends('layouts.master')

@section('content')
    <h1>List of Businesses</h1>

    @foreach ($businesses as $business)
        <div><a href="/businesses/{{ $business->slug }}">{{ $business->name }}</a></div>
    @endforeach
@stop