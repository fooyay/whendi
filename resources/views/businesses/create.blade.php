@extends('layouts.master')

@section('content')

    <h1>Register a New Business</h1>

    <p>Thanks for your interest in When Can You Do It!</p>
    <p>Use this form to register your business on our site.
    The service is free during our initial testing period, but a nominal monthly fee will apply later.</p>
    <p>Service available in the United States only, please enter a valid US zip code for the location
    of your business.</p>

    @if (count($errors) > 0)
        <span style="color:red">
            <ul>
                @foreach ($errors->unique() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </span>
    @endif

    <form method="POST" action="/businesses">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required><br />
        <label for="zip_code">Zip Code: </label>
        <input type="number" name="zip_code" id="zip_code" pattern="[0-9]*" min="0" max="99999" value="{{ old('zip_code') }}" required><br />
        {{ csrf_field() }}
        <button type="submit">Register Business</button>
    </form>
@stop
