@extends('layouts.master')

@section('content')
    <h1>Edit Lesson</h1>

    <form method="POST" action="/lessons/{{ $lesson->id }}">
        {{ method_field('PATCH') }}
        <b>Name: </b>
        <input type="text" name="name" value="{{ $lesson->name }}"><br />
        <b>Capacity: </b>
        <input type="number" name="capacity" min="1" size="5" value="{{ $lesson->capacity }}"><br />
        {{ csrf_field() }}
        <input type="hidden" name="businessId" value="{{ 1 /* $business->id */ }}">
        <button type="submit">Update Lesson</button>
    </form>

@stop