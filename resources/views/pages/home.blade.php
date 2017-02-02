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

    <script>
        $(document).ready(function(){
            // Add smooth scrolling to all links in navbar
            $(".navbar a").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();
                    // Store hash
                    var hash = this.hash;
                    // Using jQuery's animate() to add smooth page scroll
                    // The optional number (900) is the number of milliseconds it takes to scroll to the area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function() {
                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // end if
            });
        })
    </script>
    @include('includes.footer')
</body>
</html>
