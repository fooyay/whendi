<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
            @include('includes.header')

            <div class="container-fluid content">
                @if(session()->has('flash-message'))
                    <div class="{{ session('flash-style') }}">{{ session('flash-message') }}</div>
                @endif
                @yield('content')
            </div>

            @include('includes.footer')
    </body>
</html>
