@extends('layouts.master')
@section('content')
                <div class="title m-b-md">
                    When Can You Do It
                </div>

                <p>Course reservation system for all kinds of lessons, such as:</p>
                @foreach($lesson_types as $lesson_type)
                    <li>{{ $lesson_type }}</li>
                @endforeach

                {{-- A different greetingi based on time of day. --}}
                @if( $day_mode )
                    <p>Good Day!</p>
                @else
                    <p>Good Evening!</p>
                @endif
@stop
