@extends('layouts.master')

@section('content')
    <h1>List of Businesses</h1>

    @foreach ($businesses as $business)
        <div>{{ $business->name }}</div>
    @endforeach
@stop
