<div class="jumbotron text-center">
    <h1>When Can You Do It?</h1>
    <p>An online system to reserve an appointment with your favorite business.</p>
    @if( ! Auth::check() )
        <a href="/register" class="btn btn-info" role="button">Sign Up Now!</a>
    @endif
</div>