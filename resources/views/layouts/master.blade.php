<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @include('includes.header')

            <div class="content">
                @yield('content')
            </div>
        </div>
        @include('includes.footer')
    </body>
</html>
