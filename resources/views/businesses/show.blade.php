@extends('layouts.master')

@section('content')


    <h1>Business Detail</h1>

    <p><b>Name: </b>{{$business->name}}</p>
    <p><b>Zip Code: </b>{{$business->zip_code}}</p>
    <p><b>Active: </b>{{$business->active}}</p>

    <p>This business offers the following lessons:</p>
    <ul>
        @foreach($business->lessons as $lesson)
            <li>{{$lesson->name}} (capacity: {{$lesson->capacity}}) <a href="/lessons/{{ $lesson->id }}/edit"><span class="mirror">&#x270E;</span></a></li>
        @endforeach
    </ul>

    <h2>Add a Lesson</h2>

    @if (count($errors) > 0)
        <span style="color:red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </span>
    @endif

    <form method="POST" action="/lessons">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required><br />
        <label for="capacity">Capacity: </label>
        <input type="number" name="capacity" id="capacity" min="1" size="5" value="{{ old('capacity') }}" required><br />
        {{ csrf_field() }}
        <input type="hidden" name="businessId" value="{{ $business->id }}">
        <button type="submit">Add Lesson</button>
    </form>
@stop
