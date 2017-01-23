<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body>
        <div>
        {{--<div class="flex-center position-ref full-height">--}}
            @include('includes.header')

            <div class="container-fluid content">
                @if(session()->has('flash-message'))
                    <div class="{{ session('flash-style') }}">{{ session('flash-message') }}</div>
                @endif
                @yield('content')
            </div>

            @include('includes.footer')
        </div>
    </body>
</html>
