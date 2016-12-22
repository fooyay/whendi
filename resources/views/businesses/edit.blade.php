@extends('layouts.master')

@section('content')

    <h1>Edit Business Profile Information</h1>

    <p>Here, you can edit information about your business.</p>
    <p>Be aware, if you change the name of your business, your URL will also change, which will break links to the
    page from outside sources, if you have any.</p>

    @if (count($errors) > 0)
        <span style="color:red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </span>
    @endif

    <form method="POST" action="/businesses/{{ $business->slug }}">
        {{ method_field('PATCH') }}

        <label for="name">Name: </label>
        <input type="text" name="name" id="name" value="{{ $business->name }}" required><br />
        <label for="zip_code">Zip Code: </label>
        <input type="number" name="zip_code" id="zip_code" pattern="[0-9]*" min="0" max="99999" value="{{ $business->zip_code }}" required><br />
        {{ csrf_field() }}
        <button type="submit">Update Business</button>
    </form>
@stop
