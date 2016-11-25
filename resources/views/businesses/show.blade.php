@extends('layouts.master')

@section('content')
    <h1>Business Detail</h1>

    <p><b>Name: </b>{{$business->name}}</p>
    <p><b>Zip Code: </b>{{$business->zip_code}}</p>
    <p><b>Active: </b>{{$business->active}}</p>

    <p>This business offers the following lessons:</p>
    <ul>
        @foreach($business->lessons as $lesson)
            <li>{{$lesson->name}} (capacity: {{$lesson->capacity}})</li>
        @endforeach
    </ul>
@stop
