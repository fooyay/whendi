<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    @include('pages.home.navbar')
    @include('pages.home.jumbotron')
    @include('pages.home.quotes')
    @include('pages.home.about')
    @include('pages.home.services')
    @include('pages.home.examples')
    @include('pages.home.pricing')
    @include('pages.home.contact')

    @include('includes.footer')
    @include('pages.home.scripts')
</body>
</html>
