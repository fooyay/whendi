@extends('layouts.master')

@section('content')
    <h1>Edit Lesson</h1>

    @if (count($errors) > 0)
        <span style="color:red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </span>
    @endif

    <form method="POST" action="/lessons/{{ $lesson->id }}">
        {{ method_field('PATCH') }}
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" value="{{ $lesson->name }}" required><br />
        <label for="capacity">Capacity: </label>
        <input type="number" name="capacity" id="capacity" min="1" size="5" value="{{ $lesson->capacity }}" required><br />
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