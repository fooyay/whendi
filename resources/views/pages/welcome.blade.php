@extends('layouts.master')
@section('content')
    <div class="jumbotron text-center">
        <h1>When Can You Do It?</h1>
        <p>An online system to reserve an appointment with your favorite business.</p>
        <form class="form-inline">
            <div class="input-group">
                <input type="email" class="form-control" size="50" placeholder="Email Address" required>
                <div class="input-group-btn">
                    <button type="button" class="btn btn-danger">Subscribe</button>
                </div>
            </div>
        </form>
    </div>

    <h2 align="center">Here's what people are saying:</h2>
    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <h4>"This is so much better than post-its on a board that no one can see."<br>
                    <span style="font-style:normal;">Jane Doe, Instructor, Yanni's Yoga</span></h4>
            </div>
            <div class="item">
                <h4>"Now I can see who's coming - using my phone!"<br>
                    <span style="font-style:normal;">Holli Hunter, Owner, Horses with Holli</span></h4>
            </div>
            <div class="item">
                <h4>"Now maybe you can make time to feed me."<br>
                    <span style="font-style:normal;">Paxil, Supervisor, When Can You Do It</span></h4>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container-fluid text-center">
        <h2>SERVICES</h2>
        <h4>Here's how we can help:</h4>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-briefcase logo-small"></span>
                <h4>BUSINESSES</h4>
                <p>Keep track of all of your appointments, online, in the cloud.</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-list-alt logo-small"></span>
                <h4>EMPLOYEES</h4>
                <p>Everyone has their own calendar.</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-user logo-small"></span>
                <h4>CLIENTS</h4>
                <p>Easy self-service, they can easily see your availability and sign up.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-picture logo-small"></span>
                <h4>PRIVATE LABEL</h4>
                <p>An option to integrate into your company's web site.</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-phone logo-small"></span>
                <h4>MOBILE</h4>
                <p>Manage your appointments using our app for iPhone and Android.</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-stats logo-small"></span>
                <h4>ANALYTICS</h4>
                <p>Learn which kind of appointments and resources have the best booking rates.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-grey">
        <div class="row">
            <div class="col-sm-8">
                <h2>About Us</h2>
                <h4>Our People</h4>
                <p>We want ot hear from you.</p>
                <button class="btn btn-default btn-lg">Get In Touch</button>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-signal logo"></span>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-globe logo"></span>
            </div>
            <div class="col-sm-8">
                <h2>Our Values</h2>
                <h4><strong>MISSION:</strong> Our mission is to make appointments easier.</h4>
                <p><strong>VISION:</strong> An easy to use online system that replaces crude pencils and paper ledgers.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid text-center bg-grey">
        <h2>Examples</h2>
        <h4>Many types of businesses need appointment scheduling:</h4>
        <div class="row text-center">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="/images/horsejumping.jpg" alt="horse riding">
                    <p><strong>Horse Riding Lessons</strong></p>
                    <p>Riders Up!</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="/images/piano.jpg" alt="piano">
                    <p><strong>Piano Lessons</strong></p>
                    <p>Tickle the ivories.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="/images/yoga.jpg" alt="yoga">
                    <p><strong>Yoga Lessons</strong></p>
                    <p>As many reps as possible.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="text-center">
            <h2>Pricing</h2>
            <h4>Choose a payment plan that works for your business:</h4>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Sole Proprietor</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong>0</strong> employees</p>
                        <p><strong>1</strong> web page</p>
                        <p><strong>20</strong> appointment slots per day</p>
                    </div>
                    <div class="panel-footer">
                        <h3>$20</h3>
                        <h4>per month</h4>
                        <button class="btn btn-lg">Sign Up</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Small Business</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong>1 - 10</strong> employees</p>
                        <p><strong>1</strong> web page</p>
                        <p><strong>200</strong> appointment slots per day</p>
                    </div>
                    <div class="panel-footer">
                        <h3>$50</h3>
                        <h4>per month</h4>
                        <button class="btn btn-lg">Sign Up</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Enterprise</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong>11+</strong> employees</p>
                        <p><strong>1</strong> web page</p>
                        <p><strong>private label</strong> option</p>
                        <p><strong>unlimited</strong> appointment slots per day</p>
                    </div>
                    <div class="panel-footer">
                        <h3>Contact Us</h3>
                        <h4>for pricing</h4>
                        <button class="btn btn-lg">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-grey">
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
                        <button class="btn btn-default pull-right" type="submit">Send</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Set height and width with CSS -->
            <div id="googleMap" style="height:400px;width:100%;"></div>

            <!-- Add Google Maps -->
            <script src="http://maps.googleapis.com/maps/api/js?key={{ env("GOOGLE_MAPS_API_KEY") }}"></script>
            <script>
                var myCenter = new google.maps.LatLng(26.4615931,-80.0885752);

                function initialize() {
                    var mapProp = {
                        center:myCenter,
                        zoom:12,
                        mapTypeId:google.maps.MapTypeId.ROADMAP
                    };

                    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

                    var marker = new google.maps.Marker({
                        position:myCenter,
                    });

                    marker.setMap(map);
                }

                google.maps.event.addDomListener(window, 'load', initialize);
            </script>
        </div>
    </div>

    <div class="container-fluid">
        {{-- A different greetingi based on time of day. --}}
        @if( $dayMode )
            <p>Good Day!</p>
        @else
            <p>Good Evening!</p>
        @endif
    </div>
@stop
