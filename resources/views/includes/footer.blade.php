<foooter id="footer" class="container-fluid text-center">
    <div class="row">
        <div class="col-sm-4 text-left">
            <p>&copy; Copyright 2017 fooyay</p>
        </div>
        <div class="col-sm-4 text-center">
            <p>Privacy Policy &mdash; Terms of Use</p>
        </div>
        <div class="col-sm-4 text-right">
            @if( date('H') > 5 or date('H') < 18 )
                <p>Good Day.</p>
            @else
                <p>Good Evening.</p>
            @endif
        </div>
    </div>
</foooter>