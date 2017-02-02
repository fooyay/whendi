<div id="pricing" class="container-fluid">
    <div class="text-center">
        <h2>Pricing</h2>
        <h4>Choose a payment plan that works for your business:</h4>
    </div>
    <div class="row">
        @foreach( $pricing_schedules as $pricing )
        <div class="col-sm-4">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h3>{{ $pricing["heading"] }}</h3>
                </div>
                <div class="panel-body">
                    <p><strong>{{ $pricing["users"] }}</strong> user{{ $pricing["users"] == "1" ? '' : 's' }}</p>
                    <p><strong>{{ $pricing["slots"] }}</strong> appointment slots per day</p>
                    <p><strong>{{ $pricing["option"] }}</strong></p>
                </div>
                <div class="panel-footer">
                    <h3>{{ $pricing["amount"] }}</h3>
                    <h4>{{ $pricing["period"] }}</h4>
                    <button class="btn btn-lg">Sign Up</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>