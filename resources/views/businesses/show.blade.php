@extends('layouts.master')

@section('content')
    @if(Session::has('lesson-status'))
        <div class='alert'>{!!  session('lesson-status') !!}</div>
    @endif

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
        <b>Name: </b>
        <input type="text" name="name" value="{{ old('name') }}" required><br />
        <b>Capacity: </b>
        <input type="number" name="capacity" min="1" size="5" value="{{ old('capacity') }}" required><br />
        {{ csrf_field() }}
        <input type="hidden" name="businessId" value="{{ $business->id }}">
        <button type="submit">Add Lesson</button>
    </form>
@stop
