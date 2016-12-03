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
        <button type="submit">Update Lesson</button>
    </form>

    <p>
    <form method="POST" action="/lessons/{{ $lesson->id }}"/>
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <script>
            function ConfirmDelete()
            {
                var x = confirm("Are you sure you want to delete this lesson?");
                if (x)
                    return true;
                else
                    return false;
            }
        </script>
        <button type="submit" onclick="return ConfirmDelete();">Delete this Lesson</button>
    </form>
    </p>

    <h2><a href="/businesses/{{ $lesson->business->slug }}">Back to {{ $lesson->business->name }}</a></h2>
@stop