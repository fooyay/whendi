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

<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js?key={{ env("GOOGLE_MAPS_API_KEY") }}"></script>
<script>
    var myCenter = new google.maps.LatLng(26.4615931,-80.0885752);
    function initialize() {
        var mapProp = {
            center:myCenter,
            zoom:12,
            scrollwheel: false,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
        var marker = new google.maps.Marker({
            position:myCenter
        });
        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>