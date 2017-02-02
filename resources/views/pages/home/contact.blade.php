<div id="contact" class="container-fluid bg-grey">
    <h2 class="text-center">Contact</h2>
    <div class="row">
        <div class="col-sm-5">
            <p>Contact us to learn more.</p>
            <p><span class="glyphicon glyphicon-map-marker"></span> Delray Beach, Florida</p>
            <p><span class="glyphicon glyphicon-phone"></span> 800-555-1212</p>
            <p><span class="glyphicon glyphicon-envelope"></span> no-reply@whencanyoudoit.com</p>
        </div>
        <div class="col-sm-7">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
            </div>
            <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <button class="btn btn-info pull-right" type="submit">Send</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div id="googleMap" class="googleMap"></div>

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
    </div>
</div>